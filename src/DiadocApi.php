<?php
/**
 * User: ikovalenko
 */

namespace AgentSIB\Diadoc;


use AgentSIB\Diadoc\Api\Proto\AcquireCounteragentRequest;
use AgentSIB\Diadoc\Api\Proto\AcquireCounteragentResult;
use AgentSIB\Diadoc\Api\Proto\AsyncMethodResult;
use AgentSIB\Diadoc\Api\Proto\Box;
use AgentSIB\Diadoc\Api\Proto\Counteragent;
use AgentSIB\Diadoc\Api\Proto\CounteragentCertificateList;
use AgentSIB\Diadoc\Api\Proto\CounteragentList;
use AgentSIB\Diadoc\Api\Proto\CounteragentStatus;
use AgentSIB\Diadoc\Api\Proto\Department;
use AgentSIB\Diadoc\Api\Proto\Docflow\GetDocflowBatchRequest;
use AgentSIB\Diadoc\Api\Proto\Docflow\GetDocflowBatchResponse;
use AgentSIB\Diadoc\Api\Proto\Docflow\GetDocflowEventsRequest;
use AgentSIB\Diadoc\Api\Proto\Docflow\GetDocflowEventsResponse;
use AgentSIB\Diadoc\Api\Proto\Docflow\GetDocflowsByPacketIdRequest;
use AgentSIB\Diadoc\Api\Proto\Docflow\GetDocflowsByPacketIdResponse;
use AgentSIB\Diadoc\Api\Proto\Docflow\SearchDocflowsRequest;
use AgentSIB\Diadoc\Api\Proto\Docflow\SearchDocflowsResponse;
use AgentSIB\Diadoc\Api\Proto\Docflow\SearchScope;
use AgentSIB\Diadoc\Api\Proto\Documents\Document;
use AgentSIB\Diadoc\Api\Proto\Documents\DocumentList;
use AgentSIB\Diadoc\Api\Proto\Events\BoxEvent;
use AgentSIB\Diadoc\Api\Proto\Events\BoxEventList;
use AgentSIB\Diadoc\Api\Proto\Events\Message;
use AgentSIB\Diadoc\Api\Proto\Events\MessagePatch;
use AgentSIB\Diadoc\Api\Proto\Events\MessagePatchToPost;
use AgentSIB\Diadoc\Api\Proto\Events\MessageToPost;
use AgentSIB\Diadoc\Api\Proto\Events\SignedContent;
use AgentSIB\Diadoc\Api\Proto\Forwarding\ForwardDocumentRequest;
use AgentSIB\Diadoc\Api\Proto\Forwarding\ForwardDocumentResponse;
use AgentSIB\Diadoc\Api\Proto\GetOrganizationsByInnListRequest;
use AgentSIB\Diadoc\Api\Proto\GetOrganizationsByInnListResponse;
use AgentSIB\Diadoc\Api\Proto\InvitationDocument;
use AgentSIB\Diadoc\Api\Proto\Organization;
use AgentSIB\Diadoc\Api\Proto\OrganizationList;
use AgentSIB\Diadoc\Api\Proto\OrganizationUserPermissions;
use AgentSIB\Diadoc\Api\Proto\OrganizationUsersList;
use AgentSIB\Diadoc\Api\Proto\RussianAddress;
use AgentSIB\Diadoc\Api\Proto\SortDirection;
use AgentSIB\Diadoc\Api\Proto\TimeBasedFilter;
use AgentSIB\Diadoc\Api\Proto\Timestamp;
use AgentSIB\Diadoc\Api\Proto\User;
use AgentSIB\Diadoc\Filter\DocumentsFilter;
use AgentSIB\Diadoc\Helper\DateHelper;
use AgentSIB\Diadoc\Model\SignerProviderInterface;

class DiadocApi
{
    const METHOD_GET = 'GET';
    const METHOD_POST = 'POST';

    const SERVICE_URL = 'https://diadoc-api.kontur.ru/';

    // Authorization
    const RESOURCE_AUTHENTICATE = '/Authenticate';
    const RESOURCE_AUTHENTICATE_V2 = '/V2/Authenticate';
    const RESOURCE_GET_EXTERNAL_SERVICE_AUTH_INFO = '/GetExternalServiceAuthInfo';

    // Organizations
    const RESOURCE_GET_BOX = '/GetBox';
    const RESOURCE_GET_DEPARTMENT = '/GetDepartment';
    const RESOURCE_GET_MY_ORGANIZATION = '/GetMyOrganizations';
    const RESOURCE_GET_MY_PERMISSIONS = '/GetMyPermissions';
    const RESOURCE_GET_MY_USER = '/GetMyUser';
    const RESOURCE_GET_ORGANIZATION = '/GetOrganization';
    const RESOURCE_GET_ORGANIZATIONS_BY_INN_KPP = '/GetOrganizationsByInnKpp';
    const RESOURCE_GET_ORGANIZATIONS_BY_INN_LIST = '/GetOrganizationsByInnList';
    const RESOURCE_GET_ORGANIZATION_USERS = '/GetOrganizationUsers';
    const RESOURCE_PARSE_RUSSIAN_ADDRESS = '/ParseRussianAddress';

    // Counteragents
    const RESOURCE_ACQUIRE_COUNTERAGENTS = '/AcquireCounteragent';
    const RESOURCE_ACQUIRE_COUNTERAGENTS_V2 = '/V2/AcquireCounteragent';
    const RESOURCE_ACQUIRE_COUNTERAGENT_RESULT = '/AcquireCounteragentResult';
    const RESOURCE_BREAK_WITH_COUNTERAGENT = '/BreakWithCounteragent';
    const RESOURCE_GET_COUNTERAGENT = '/GetCounteragent';
    const RESOURCE_GET_COUNTERAGENT_V2 = '/V2/GetCounteragent';
    const RESOURCE_GET_COUNTERAGENTS = '/GetCounteragents';
    const RESOURCE_GET_COUNTERAGENTS_V2 = '/V2/GetCounteragents';
    const RESOURCE_GET_COUNTERAGENT_CERTIFICATES = '/GetCounteragentCertificates';

    // Messages
    const RESOURCE_GET_ENTITY_CONTENT = ' /V4/GetEntityContent';
    const RESOURCE_GET_MESSAGE = '/V3/GetMessage';
    const RESOURCE_POST_MESSAGE = '/V3/PostMessage';
    const RESOURCE_POST_MESSAGE_PATCH = '/V3/PostMessagePatch';

    // Documents
    const RESOURCE_DELETE = '/Delete';
    const RESOURCE_FORWARD_DOCUMENT = '/V2/ForwardDocument';
    const RESOURCE_GENERATE_ACCEPTANCE_CERTIFICATE_XML_FOR_BUYER = '/GenerateAcceptanceCertificateXmlForBuyer';
    const RESOURCE_GENERATE_ACCEPTANCE_CERTIFICATE_XML_FOR_SELLER = '/GenerateAcceptanceCertificateXmlForSeller';
    const RESOURCE_GENERATE_DOCUMENT_PROTOCOL = '/GenerateDocumentProtocol';
    const RESOURCE_GENERATE_DOCUMENT_ZIP = '/GenerateDocumentZip';
    const RESOURCE_GENERATE_FORWARDED_DOCUMENT_PROTOCOL = '/V2/GenerateForwardedDocumentProtocol';
    const RESOURCE_GENERATE_PRINT_FORM = '/GeneratePrintForm';
    const RESOURCE_GENERATE_PRINT_FORM_FROM_ATTACHMENT = '/GeneratePrintFormFromAttachment';
    const RESOURCE_GENERATE_REVOCATION_REQUEST_XML = '/GenerateRevocationRequestXml';
    const RESOURCE_GENERATE_SIGNATURE_REJECTION_XML = '/GenerateSignatureRejectionXml';
    const RESOURCE_GENERATE_TORG_12_XML_FOR_BUYER = '/GenerateTorg12XmlForBuyer';
    const RESOURCE_GENERATE_TORG_12_XML_FOR_SELLER = '/GenerateTorg12XmlForSeller';
    const RESOURCE_GET_DOCUMENT = '/V3/GetDocument';
    const RESOURCE_GET_DOCUMENTS = '/V3/GetDocuments';
    const RESOURCE_GET_FORWARDED_DOCUMENT_EVENTS = '/V2/GetForwardedDocumentEvents';
    const RESOURCE_GENERATE_FORWARDED_DOCUMENT_PRINT_FORM = '/GenerateForwardedDocumentPrintForm';
    const RESOURCE_GET_FORWARDED_ENTITY_CONTENT = '/V2/GetForwardedEntityContent';
    const RESOURCE_GET_FORWARDED_DOCUMENT = '/V2/GetForwardedDocuments';
    const RESOURCE_GET_GENERATED_PRINT_FORM = '/GetGeneratedPrintForm';
    const RESOURCE_GET_RECOGNIZED = '/GetRecognized';
    const RESOURCE_MOVE_DOCUMENTS = '/MoveDocuments';
    const RESOURCE_PARSE_ACCEPTANCE_CERTIFICATE_SELLER_TITLE_XML = '/ParseAcceptanceCertificateSellerTitleXml';
    const RESOURCE_PARSE_REVOCATION_REQUEST_XML = '/ParseRevocationRequestXml';
    const RESOURCE_PARSE_SIGNATURE_REJECTION_XML = '/ParseSignatureRejectionXml';
    const RESOURCE_PARSE_TORG_12_SELLER_TITLE_XML = '/ParseTorg12SellerTitleXml';
    const RESOURCE_PREPARE_DOCUMENTS_TO_SIGN = '/PrepareDocumentsToSign';
    const RESOURCE_RECOGNIZE = '/Recognize';
    const RESOURCE_RECYCLE_DRAFT = '/RecycleDraft';
    const RESOURCE_RESTORE = '/Restore';
    const RESOURCE_SELF_UPLOAD = '/ShelfUpload';
    const RESOURCE_SEND_DRAFT = '/SendDraft';

    // SF/ISF/KSF
    const RESOURCE_CAN_SEND_INVOICE = '/CanSendInvoice';
    const RESOURCE_GENERATE_INVOICE_XML = '/GenerateInvoiceXml';
    const RESOURCE_GENERATE_INVOICE_CORRECTION_REQUEST_XML = '/GenerateInvoiceCorrectionRequestXml';
    const RESOURCE_GENERATE_INVOICE_DOCUMENT_RECEIPT_XML = '/GenerateInvoiceDocumentReceiptXml';
    const RESOURCE_GET_INVOICE_CORRECTION_REQUEST_INFO = '/GetInvoiceCorrectionRequestInfo';
    const RESOURCE_PARSE_INVOICE_XML = '/ParseInvoiceXml';

    // Events
    const RESOURCE_GET_EVENT = '/V2/GetEvent';
    const RESOURCE_GET_NEW_EVENTS = '/V4/GetNewEvents';

    //Docflow API
    const RESOURCE_GET_DOCFLOWS = '/V2/GetDocflows';
    const RESOURCE_GET_DOCFLOWS_BY_PACKET_ID = '/V2/GetDocflowsByPacketId';
    const RESOURCE_SEARCH_DOCFLOWS = '/V2/SearchDocflows';
    const RESOURCE_GET_DOCFLOWS_EVENTS = '/V2/GetDocflowEvents';

    // Cloud sign
    const RESOURCE_CLOUD_SIGN = '/CloudSign';
    const RESOURCE_CLOUD_SIGN_CONFIRM = '/CloudSignConfirm';
    const RESOURCE_CLOUD_SIGN_CONFIRM_RESULT = '/CloudSignConfirmResult';
    const RESOURCE_CLOUD_SIGN_RESULT = '/CloudSignResult';
    const RESOURCE_AUTO_SIGN_RECEIPTS = '/AutoSignReceipts';
    const RESOURCE_AUTO_SIGN_RECEIPTS_RESULT = '/AutoSignReceiptsResult';

    private $ddauthApiClientId;
    private $token;

    /** @var  SignerProviderInterface */
    private $signerProvider;

    public function __construct($ddauthApiClientId, SignerProviderInterface $signerProvider)
    {
        $this->ddauthApiClientId = $ddauthApiClientId;
        $this->signerProvider = $signerProvider;
    }


    public function authenticateCertificate($certificateFile)
    {
        $response = $this->doRequest(self::RESOURCE_AUTHENTICATE, [], self::METHOD_POST, file_get_contents($certificateFile));

        $token = base64_encode($this->signerProvider->decrypt($response));

        $this->setToken($token);

        return $token;
    }

    public function authenticateLogin($login, $password)
    {
        $response = $this->doRequest(
            self::RESOURCE_AUTHENTICATE,
            [
                'login' => $login,
                'password'  =>  $password
            ],
            self::METHOD_POST
        );

        $this->setToken($response);

        return $response;
    }

    protected function buildRequestHeaders()
    {
        $header = sprintf('DiadocAuth ddauth_api_client_id=%s', $this->ddauthApiClientId);
        if ($token = $this->getToken()) {
            $header .= sprintf(', ddauth_token=%s', $token);
        }
        return ['Authorization: ' . $header];
    }

    protected function doRequest($resource, $params = [], $method = self::METHOD_GET, $data = array())
    {
        if (!$this->getToken() && !in_array($resource, [self::RESOURCE_AUTHENTICATE, self::RESOURCE_AUTHENTICATE_V2])) {
            throw new \Exception('Unauthorized request');
        }

        $uri = sprintf(
            '%s%s?%s',
            self::SERVICE_URL,
            $resource,
            http_build_query($params)
        );

        $ch = curl_init($uri);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $this->buildRequestHeaders());

//        curl_setopt($ch, CURLOPT_HEADER, 1);
        if ($method == self::METHOD_POST) {
            curl_setopt($ch, CURLOPT_POST, 0);
            curl_setopt($ch, CURLOPT_POSTFIELDS, is_array($data) ? http_build_query($data) : $data);
        }
        elseif ($method == self::METHOD_GET) {
            curl_setopt($ch, CURLOPT_HTTPGET, 1);
            curl_setopt($ch, CURLOPT_BINARYTRANSFER, 1);
        }

//        curl_setopt_array($ch, $this->config['curl_options']);

        $response = curl_exec($ch);

        if (curl_errno($ch)) {
            throw new \Exception(sprintf('Curl error: (%s) %s', curl_errno($ch), curl_error($ch)), curl_errno($ch));
        }
        if (!($httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE)) || ($httpCode !== 200 && $httpCode !== 204)) {
            throw new \Exception(sprintf('Curl error http code: (%s) %s', $httpCode, $response), $httpCode);
        }
        curl_close($ch);

        return $response;
    }


    /**
     * @param string $boxId
     *
     * @return Box|\Protobuf\Message
     */
    public function getBox($boxId)
    {
        $response = $this->doRequest(
            self::RESOURCE_GET_BOX,
            [
                'boxId' => $boxId
            ]
        );

        return Box::fromStream($response);
    }

    /**
     * @param string $orgId
     * @param string $departmentId
     *
     * @return Department|\Protobuf\Message
     */
    public function getDepartment($orgId, $departmentId)
    {
        $response = $this->doRequest(
            self::RESOURCE_GET_DEPARTMENT,
            [
                'orgId' => $orgId,
                'departmentId' => $departmentId
            ]
        );

        return Department::fromStream($response);
    }

    /**
     * @return OrganizationList|\Protobuf\Message
     */
    public function getMyOrganizations()
    {
        $response = $this->doRequest(self::RESOURCE_GET_MY_ORGANIZATION);

        return OrganizationList::fromStream($response);
    }

    /**
     * @param $orgId
     *
     * @return OrganizationUserPermissions|\Protobuf\Message
     */
    public function getMyPermissions($orgId)
    {
        $response = $this->doRequest(
            self::RESOURCE_GET_MY_PERMISSIONS,
            [
                'orgId' => $orgId
            ]
        );

        return OrganizationUserPermissions::fromStream($response);
    }

    /**
     * @return User|\Protobuf\Message
     */
    public function getMyUser()
    {
        $response = $this->doRequest(self::RESOURCE_GET_MY_USER);

        return User::fromStream($response);
    }

    /**
     * @param string $orgId
     *
     * @return Organization|\Protobuf\Message
     */
    public function getOrganizationById($orgId)
    {
        $response = $this->doRequest(
            self::RESOURCE_GET_ORGANIZATION,
            [
                'orgId' => $orgId
            ]
        );

        return Organization::fromStream($response);
    }

    /**
     * @param string $fnsParticipantId
     *
     * @return Organization|\Protobuf\Message
     */
    public function getOrganizationByFnsParticipantId($fnsParticipantId)
    {
        $response = $this->doRequest(
            self::RESOURCE_GET_ORGANIZATION,
            [
                'fnsParticipantId' => $fnsParticipantId
            ]
        );

        return Organization::fromStream($response);
    }


    /**
     * @param string $inn
     *
     * @return Organization|\Protobuf\Message
     */
    public function getOrganizationByInn($inn)
    {
        $response = $this->doRequest(
            self::RESOURCE_GET_ORGANIZATION,
            [
                'inn' => $inn
            ]
        );

        return Organization::fromStream($response);
    }

    /**
     * @param string $inn
     * @param string $kpp
     * @param bool $includeRelations
     *
     * @return OrganizationList|\Protobuf\Message
     */
    public function getOrganizationsByInnKpp($inn, $kpp = null, $includeRelations = false)
    {
        $response = $this->doRequest(
            self::RESOURCE_GET_ORGANIZATIONS_BY_INN_KPP,
            [
                'inn' => $inn,
                'kpp' => $kpp,
//                'includeRelations' => (int) $includeRelations
            ]
        );

        return OrganizationList::fromStream($response);
    }

    /**
     * @param $myOrgId
     * @param array $innList
     *
     * @return GetOrganizationsByInnListResponse|\Protobuf\Message
     */
    public function getOrganizationsByInnList($myOrgId, $innList = [])
    {
        $request = new GetOrganizationsByInnListRequest();
        array_map([$request, 'addInnList'], $innList);

        $response = $this->doRequest(
            self::RESOURCE_GET_ORGANIZATIONS_BY_INN_LIST,
            [
                'myOrgId'   =>  $myOrgId
            ],
            self::METHOD_POST,
            $request->toStream()->getContents()
        );

        return GetOrganizationsByInnListResponse::fromStream($response);
    }

    /**
     * @param $orgId
     *
     * @return OrganizationUsersList|\Protobuf\Message
     */
    public function getOrganizationUsers($orgId)
    {
        $response = $this->doRequest(
            self::RESOURCE_GET_ORGANIZATION_USERS,
            [
                'orgId' => $orgId
            ]
        );

        return OrganizationUsersList::fromStream($response);
    }

    /**
     * @param $address
     *
     * @return RussianAddress|\Protobuf\Message
     */
    public function parseRussianAddress($address)
    {
        $response = $this->doRequest(
            self::RESOURCE_PARSE_RUSSIAN_ADDRESS,
            [
                'address' => $address
            ]
        );

        return RussianAddress::fromStream($response);
    }

    /**
     * @param $myOrgId
     * @param $counteragentOrgId
     * @param $myDepartmentId
     * @param null $comment
     *
     * @return mixed
     */
    public function acquireCounteragent($myOrgId, $counteragentOrgId, $myDepartmentId, $comment = null)
    {
        $response = $this->doRequest(
            self::RESOURCE_ACQUIRE_COUNTERAGENTS,
            [
                'myOrgId' => $myOrgId,
                'counteragentOrgId' => $counteragentOrgId,
                'myDepartmentId'    =>  $myDepartmentId,
                'comment'   =>  $comment
            ],
            self::METHOD_POST
        );

        return $response;
    }

    /**
     * @param $myOrgId
     * @param $counteragentOrgId
     * @param $myDepartmentId
     * @param $invitationDocument|null $invationDocument
     * @param null $messageToContragent
     *
     * @return AsyncMethodResult|\Protobuf\Message
     */
    public function acquireCounteragentWithDocument($myOrgId, $counteragentOrgId, $myDepartmentId, InvitationDocument $invitationDocument = null, $messageToContragent = null)
    {
        $request = new AcquireCounteragentRequest();
        $request->setOrgId($counteragentOrgId);
        $request->setMessageToCounteragent($messageToContragent);
        $request->setInvitationDocument($invitationDocument);

        $response = $this->doRequest(
            self::RESOURCE_ACQUIRE_COUNTERAGENTS_V2,
            [
                'myOrgId' => $myOrgId,
                'myDepartmentId'    =>  $myDepartmentId,
            ],
            self::METHOD_POST,
            $request->toStream()->getContents()
        );
        return AsyncMethodResult::fromStream($response);
    }

    /**
     * @param $myOrgId
     * @param $counteragentInn
     * @param $myDepartmentId
     * @param $invitationDocument|null $invationDocument
     * @param null $messageToContragent
     *
     * @return AsyncMethodResult|\Protobuf\Message
     */
    public function acquireCounteragentByInnWithDocument($myOrgId, $counteragentInn, $myDepartmentId = null, InvitationDocument $invitationDocument = null, $messageToContragent = null)
    {
        $request = new AcquireCounteragentRequest();
        $request->setInn($counteragentInn);
        $request->setMessageToCounteragent($messageToContragent);
        $request->setInvitationDocument($invitationDocument);

        $response = $this->doRequest(
            self::RESOURCE_ACQUIRE_COUNTERAGENTS_V2,
            [
                'myOrgId' => $myOrgId,
                'myDepartmentId'    =>  $myDepartmentId,
            ],
            self::METHOD_POST,
            $request->toStream()->getContents()
        );
        return AsyncMethodResult::fromStream($response);
    }

    /**
     * @param $taskId
     *
     * @return AcquireCounteragentResult|\Protobuf\Message
     */
    public function acquireCounteragentResult($taskId)
    {
        $response = $this->doRequest(
            self::RESOURCE_ACQUIRE_COUNTERAGENT_RESULT,
            [
                'taskId' => $taskId
            ],
            self::METHOD_GET
        );

        return AcquireCounteragentResult::fromStream($response);
    }

    /**
     * @param $myOrgId
     * @param $counteragentOrgId
     * @param null $comment
     * @return bool
     */
    public function breakWithCounteragent($myOrgId, $counteragentOrgId, $comment = null)
    {
        $response = $this->doRequest(
            self::RESOURCE_BREAK_WITH_COUNTERAGENT,
            [
                'myOrgId' => $myOrgId,
                'counteragentOrgId' => $counteragentOrgId,
                'comment' => $comment
            ],
            self::METHOD_POST
        );

        return true;
    }

    /**
     * @param $myOrgId
     * @param $counteragentOrgId
     *
     * @return Counteragent|\Protobuf\Message
     */
    public function getCountragent($myOrgId, $counteragentOrgId)
    {
        $response = $this->doRequest(
            self::RESOURCE_GET_COUNTERAGENT,
            [
                'myOrgId' => $myOrgId,
                'counteragentOrgId' => $counteragentOrgId
            ]
        );

        return Counteragent::fromStream($response);
    }


    /**
     * @param $myOrgId
     * @param $counteragentOrgId
     *
     * @return Counteragent|\Protobuf\Message
     */
    public function getCountragentV2($myOrgId, $counteragentOrgId)
    {
        $response = $this->doRequest(
            self::RESOURCE_GET_COUNTERAGENT_V2,
            [
                'myOrgId' => $myOrgId,
                'counteragentOrgId' => $counteragentOrgId
            ]
        );

        return Counteragent::fromStream($response);
    }


    /**
     * @param $myOrgId
     * @param CounteragentStatus $counteragentStatus
     * @param null $afterIndexKey
     *
     * @return CounteragentList|\Protobuf\Message
     */
    public function getCountragents($myOrgId, CounteragentStatus $counteragentStatus = null, $afterIndexKey = null)
    {
        $response = $this->doRequest(
            self::RESOURCE_GET_COUNTERAGENTS,
            [
                'myOrgId'   =>  $myOrgId,
                'counteragentStatus' => $counteragentStatus?$counteragentStatus->name():null,
                'afterIndexKey'  =>  $afterIndexKey
            ]
        );

        return CounteragentList::fromStream($response);
    }

    /**
     * @param $myOrgId
     * @param CounteragentStatus $counteragentStatus
     * @param null $afterIndexKey
     *
     * @return CounteragentList|\Protobuf\Message
     */
    public function getCountragentsV2($myOrgId, CounteragentStatus $counteragentStatus = null, $afterIndexKey = null)
    {
        $response = $this->doRequest(
            self::RESOURCE_GET_COUNTERAGENTS_V2,
            [
                'myOrgId'   =>  $myOrgId,
                'counteragentStatus' => $counteragentStatus?$counteragentStatus->name():null,
                'afterIndexKey'  =>  $afterIndexKey
            ]
        );

        return CounteragentList::fromStream($response);
    }

    public function getCounteragentCertificates($myOrgId, $counteragentOrgId)
    {
        $response = $this->doRequest(
            self::RESOURCE_GET_COUNTERAGENT_CERTIFICATES,
            [
                'myOrgId' => $myOrgId,
                'counteragentOrgId' => $counteragentOrgId
            ]
        );

        return CounteragentCertificateList::fromStream($response);
    }

    /**
     * @param $boxId
     * @param $messageId
     * @param $entityId
     *
     * @return mixed
     */
    public function getEntityContent($boxId, $messageId, $entityId)
    {
        $response = $this->doRequest(
            self::RESOURCE_GET_ENTITY_CONTENT,
            [
                'boxId' =>  $boxId,
                'messageId' =>  $messageId,
                'entityId'  =>  $entityId
            ]
        );

        return $response;
    }

    /**
     * @param $boxId
     * @param $messageId
     * @param null $entityId
     * @param null|bool $originalSignature
     *
     * @return Message|\Protobuf\Message
     */
    public function getMessage($boxId, $messageId, $entityId = null, $originalSignature = null)
    {
        $response = $this->doRequest(
            self::RESOURCE_GET_MESSAGE,
            [
                'boxId' =>  $boxId,
                'messageId' =>  $messageId,
                'entityId'  =>  $entityId,
                'originalSignature' => $originalSignature
            ]
        );

        return Message::fromStream($response);
    }

    /**
     * @param MessageToPost $messageToPost
     * @param null $operationId
     *
     * @return Message|\Protobuf\Message
     */
    public function postMessage(MessageToPost $messageToPost, $operationId = null)
    {
        $response = $this->doRequest(
            self::RESOURCE_POST_MESSAGE,
            [
                'operationId' => $operationId
            ],
            self::METHOD_POST,
            $messageToPost->toStream()->getContents()
        );

        return Message::fromStream($response);
    }

    /**
     * @param MessagePatchToPost $messagePatchToPost
     * @param null $operationId
     *
     * @return MessagePatch|\Protobuf\Message
     */
    public function postMessagePatch(MessagePatchToPost $messagePatchToPost, $operationId = null)
    {
        $response = $this->doRequest(
            self::RESOURCE_POST_MESSAGE_PATCH,
            [
                'operationId' => $operationId
            ],
            self::METHOD_POST,
            $messagePatchToPost->toStream()->getContents()
        );

        return MessagePatch::fromStream($response);
    }

    /**
     * @param $boxId
     * @param $messageId
     * @param null $documentId
     *
     * @return bool
     */
    public function delete($boxId, $messageId, $documentId = null)
    {
        $this->doRequest(
            self::RESOURCE_DELETE,
            [
                'boxId' =>  $boxId,
                'messageId' => $messageId,
                'documentId' => $documentId
            ],
            self::METHOD_POST
        );

        return true;
    }

    /**
     * @param $boxId
     * @param $toBoxId
     * @param $documentId
     *
     * @return ForwardDocumentResponse
     */
    public function forwardDocument($boxId, $toBoxId, $documentId)
    {
        $forwardDocumentRequest = new ForwardDocumentRequest();
        $forwardDocumentRequest->setToBoxId($toBoxId);
        $forwardDocumentRequest->setDocumentId($documentId);

        $response = $this->doRequest(
            self::RESOURCE_FORWARD_DOCUMENT,
            [
                'boxId' =>  $boxId
            ],
            self::METHOD_POST,
            $forwardDocumentRequest->toStream()->getContents()
        );

        return $response;
    }

    /**
     * @param $boxId
     * @param $messageId
     * @param $entityId
     * @return Document|\Protobuf\Message
     */
    public function getDocument($boxId, $messageId, $entityId)
    {
        $response = $this->doRequest(
            self::RESOURCE_GET_DOCUMENT,
            [
                'boxId' => $boxId,
                'messageId' =>  $messageId,
                'entityId'  =>  $entityId
            ]
        );

        return Document::fromStream($response);
    }



    public function getDocuments($boxId, DocumentsFilter $documentsFilter = null, SortDirection $sortDirection = null, $afterIndexKey = null)
    {
        if (is_null($sortDirection)) {
            $sortDirection = SortDirection::Ascending();
        }
        $params = [
            'boxId' => $boxId,
            'sortDirection' =>  $sortDirection->name(),
            'afterIndexKey' =>  $afterIndexKey
        ];
        if (is_null($documentsFilter)) {
            $documentsFilter = DocumentsFilter::create();
        }

        $params = array_replace($params, $documentsFilter->toFilter());

        $response = $this->doRequest(
            self::RESOURCE_GET_DOCUMENTS,
            $params
        );

        return DocumentList::fromStream($response);
    }


    /**
     * @param $boxId
     * @param GetDocflowBatchRequest $batchRequest
     *
     * @return GetDocflowBatchResponse
     */
    public function getDocflows($boxId, GetDocflowBatchRequest $batchRequest)
    {
        $response = $this->doRequest(
            self::RESOURCE_GET_DOCFLOWS,
            [
                'boxId' =>  $boxId
            ],
            self::METHOD_POST,
            $batchRequest->toStream()->getContents()
        );

        return GetDocflowBatchResponse::fromStream($response);
    }

    /**
     * @param $boxId
     * @param $packetId
     * @param bool $injectEntityContent
     * @param null $afterIndexKey
     * @param int $count
     *
     * @return GetDocflowsByPacketIdResponse|\Protobuf\Message
     */
    public function getDocflowsByPacketId($boxId, $packetId, $injectEntityContent = false, $afterIndexKey = null, $count = 100)
    {
        $getDocflowsByPacketIdRequest = new GetDocflowsByPacketIdRequest();
        $getDocflowsByPacketIdRequest->setPacketId($packetId);
        $getDocflowsByPacketIdRequest->setInjectEntityContent($injectEntityContent);
        $getDocflowsByPacketIdRequest->setAfterIndexKey($afterIndexKey);
        $getDocflowsByPacketIdRequest->setCount($count);

        $response = $this->doRequest(
            self::RESOURCE_GET_DOCFLOWS_BY_PACKET_ID,
            [
                'boxId' =>  $boxId
            ],
            self::METHOD_POST,
            $getDocflowsByPacketIdRequest->toStream()->getContents()
        );

        return GetDocflowsByPacketIdResponse::fromStream($response);
    }

    /**
     * @param $boxId
     * @param $queryString
     * @param SearchScope|null $searchScope
     * @param null|int $firstIndex
     * @param int $count
     *
     * @return SearchDocflowsResponse|\Protobuf\Message
     */
    public function searchDocflows($boxId, $queryString, SearchScope $searchScope = null, $firstIndex = null, $count = 100)
    {
        $searchDocflowRequest = new SearchDocflowsRequest();
        $searchDocflowRequest->setQueryString($queryString);
        if ($searchScope) {
            $searchDocflowRequest->setScope($searchScope);
        }
        if ($firstIndex) {
            $searchDocflowRequest->setFirstIndex($firstIndex);
        }
        $searchDocflowRequest->setCount($count);

        $response = $this->doRequest(
            self::RESOURCE_SEARCH_DOCFLOWS,
            [
                'boxId' =>  $boxId
            ],
            self::METHOD_POST,
            $searchDocflowRequest->toStream()->getContents()
        );

        return SearchDocflowsResponse::fromStream($response);
    }

    /**
     * @param $boxId
     * @param \DateTime|null $from
     * @param \DateTime|null $to
     * @param SortDirection|null $sortDirection
     * @param bool $populateDocuments
     * @param bool $populatePreviousDocumentStates
     * @param bool $injectEntityContent
     * @param null $afterIndexKey
     *
     * @return GetDocflowEventsResponse
     */
    public function getDocflowEvents
    (
        $boxId,
        \DateTime $from = null,
        \DateTime $to = null,
        SortDirection $sortDirection = null,
        $populateDocuments = false,
        $populatePreviousDocumentStates = false,
        $injectEntityContent = false,
        $afterIndexKey = null
    )
    {


        $timeBasedFilter = new TimeBasedFilter();
        $fromTimestamp = null;
        $toTimestamp = null;

        if ($from) {
            $fromTimestamp = new Timestamp();
            $fromTimestamp->setTicks(DateHelper::convertDateTimeToTicks($from));
        }
        if ($to) {
            $toTimestamp = new Timestamp();
            $toTimestamp->setTicks(DateHelper::convertDateTimeToTicks($to));
        }

        $timeBasedFilter->setFromTimestamp($fromTimestamp);
        $timeBasedFilter->setToTimestamp($toTimestamp);
        $timeBasedFilter->setSortDirection($sortDirection);

        $getDocflowEventsRequest = new GetDocflowEventsRequest();
        $getDocflowEventsRequest->setFilter($timeBasedFilter);
        $getDocflowEventsRequest->setPopulateDocuments($populateDocuments);
        $getDocflowEventsRequest->setPopulatePreviousDocumentStates($populatePreviousDocumentStates);
        $getDocflowEventsRequest->setInjectEntityContent($injectEntityContent);
        $getDocflowEventsRequest->setAfterIndexKey($afterIndexKey);


        $response = $this->doRequest(
            self::RESOURCE_GET_DOCFLOWS_EVENTS,
            [
                'boxId' =>  $boxId
            ],
            self::METHOD_POST,
            $getDocflowEventsRequest->toStream()->getContents()
        );

        return GetDocflowEventsResponse::fromStream($response);
    }


    /**
     * @param $boxId
     * @param $eventId
     *
     * @return BoxEvent
     */
    public function getEvent($boxId, $eventId)
    {
        $response = $this->doRequest(
            self::RESOURCE_GET_EVENT,
            [
                'boxId' =>  $boxId,
                'eventId' =>    $eventId
            ]
        );

        return BoxEvent::fromStream($response);
    }

    public function getNewEvents($boxId, $afterEventId = null)
    {
        $response = $this->doRequest(
            self::RESOURCE_GET_NEW_EVENTS,
            [
                'boxId' =>  $boxId,
                'afterEventId' =>    $afterEventId
            ]
        );

        return BoxEventList::fromStream($response);
    }

    public function generateInvitationDocument($fileName, $title = null, $signatureRequested = false)
    {
        $splFile = new \SplFileInfo($fileName);
        $invitationDocument = new InvitationDocument();
        $invitationDocument->setFileName(!empty($title)?$title:$splFile->getFilename());
        $invitationDocument->setSignedContent($this->generateSignedContentFromFile($fileName));
        $invitationDocument->setSignatureRequested($signatureRequested);
//        $invitationDocument->setType();

        return $invitationDocument;
    }


    public function generateSignedContentFromFile($fileName)
    {
        if (!file_exists($fileName)) {
            throw new \Exception('File not found');
        }

        $content = file_get_contents($fileName);
        $signedContent = new SignedContent();
        $signedContent->setContent($content);
        $signedContent->setSignature($this->signerProvider->sign($content));

        return $signedContent;
    }

    /**
     * @return string
     */
    protected function getToken()
    {
        return $this->token;
    }

    /**
     * @param string $token
     *
     * @return $this
     */
    public function setToken($token)
    {
        $this->token = $token;
    }

}