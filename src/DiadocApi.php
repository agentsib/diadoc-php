<?php
/**
 * User: ikovalenko
 */

namespace AgentSIB\Diadoc;


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
    const RESOURCE_GET_ORGANIZATION_BY_INN_KPP = '/GetOrganizationsByInnKpp';
    const RESOURCE_GET_ORGANIZATION_BY_INN_LIST = '/GetOrganizationsByInnList';
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

    public function __construct($ddauthApiClientId)
    {
        $this->ddauthApiClientId = $ddauthApiClientId;
    }


    public function authenticateCertificate($certificateFile)
    {
        $response = $this->doRequest(self::RESOURCE_AUTHENTICATE, [], self::METHOD_POST, file_get_contents($certificateFile));

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

        if (!$response = curl_exec($ch)) {
            throw new \Exception(sprintf('Curl error: (%s) %s', curl_errno($ch), curl_error($ch)), curl_errno($ch));
        }
        if (!($httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE)) || ($httpCode !== 200 && $httpCode !== 204)) {
            throw new \Exception(sprintf('Curl error http code: (%s) %s', $httpCode, $response), $httpCode);
        }
        curl_close($ch);

        return $response;
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
    protected function setToken($token)
    {
        $this->token = $token;
    }

}