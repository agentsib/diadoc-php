<?php
/**
 * User: ikovalenko
 */

namespace AgentSIB\Diadoc\Filter;


use AgentSIB\Diadoc\Api\Proto\DocumentType;
use AgentSIB\Diadoc\Helper\DateHelper;

class DocumentsFilter
{
    /**
     * соответствует набору из четырех типов документов СФ/ИСФ/КСФ/ИКСФ
     * (Invoice, InvoiceRevision, InvoiceCorrection, InvoiceCorrectionRevision)
     *
     * @see DocumentType
     */
    const DOCUMENT_TYPE_ANY = 'Any';
    /**
     * соответствует любому типу двусторонних документов
     * (Nonformalized, Torg12, AcceptanceCertificate, XmlTorg12,
     * XmlAcceptanceCertificate, TrustConnectionRequest, PriceList,
     * PriceListAgreement, CertificateRegistry, ReconciliationAct, Contract,
     * Torg13)
     *
     * @see DocumentType
     */
    const DOCUMENT_TYPE_ANY_INVOICE = 'AnyInvoiceDocumentType';
    /**
     * соответствует любому типу односторонних документов
     * (ProformaInvoice, ServiceDetails)
     *
     * @see DocumentType
     */
    const DOCUMENT_TYPE_ANY_BILATERAL = 'AnyBilateralDocumentType';
    /**
     * соответствует любому типу документа.
     *
     * @see DocumentType
     */
    const DOCUMENT_TYPE_ANY_UNILATERAL = 'AnyUnilateralDocumentType';

    /** входящий документ */
    const DOCUMENT_CLASS_INBOUND = 'Inbound';
    /** исходящий документ */
    const DOCUMENT_CLASS_OUTBOUND = 'Outbound';
    /** внутренний документ */
    const DOCUMENT_CLASS_INTERNAL = 'Internal';

    /** любой документ указанного класса */
    const DOCUMENT_STATUS_ANY = '';
    /** документ не прочитан */
    const DOCUMENT_STATUS_NOT_READ = 'NotRead';
    /** документ без запроса ответной подписи */
    const DOCUMENT_STATUS_NO_RECIPIENT_SIGNATURE_REQUEST = 'NoRecipientSignatureRequest';
    /** документ в ожидании ответной подписи */
    const DOCUMENT_STATUS_WAIT_FOR_RECIPIENT_SIGNATURE = 'WaitingForRecipientSignature';
    /** документ с ответной подписью */
    const DOCUMENT_STATUS_WITH_RECIPIENT_SIGNATURE = 'WithRecipientSignature';
    /** документ с подписью отправителя */
    const DOCUMENT_STATUS_WITH_SENDER_SIGNATURE = 'WithSenderSignature';
    /** документ с отказом от формирования ответной подписи */
    const DOCUMENT_STATUS_RECIPIENT_SIGNATURE_REQUEST_REJECT = 'RecipientSignatureRequestRejected';
    /** документ, требующий подписания и отправки */
    const DOCUMENT_STATUS_WAIT_FOR_SENDER_SIGNATURE = 'WaitingForSenderSignature';
    /** документ с невалидной подписью отправителя, требующий повторного подписания и отправки */
    const DOCUMENT_STATUS_INVALID_SENDER_SIGNATURE = 'InvalidSenderSignature';
    /** документ с невалидной подписью получателя, требующий повторного подписания и отправки */
    const DOCUMENT_STATUS_INVALID_RECIPIENT_SIGNATURE = 'InvalidRecipientSignature';
    /** согласованный документ */
    const DOCUMENT_STATUS_APPROVED = 'Approved';
    /** документ с отказом согласования */
    const DOCUMENT_STATUS_DISAPPROVED = 'Disapproved';
    /** документ, находящийся на согласовании или подписи */
    const DOCUMENT_STATUS_WAITING_FOR_RESOLUTION = 'WaitingForResolution';
    /** документ с отказом в запросе подписи сотруднику */
    const DOCUMENT_STATUS_SIGNATURE_REQUEST_REJECTED = 'SignatureRequestRejected';
    /** документ с завершенным документооборотом */
    const DOCUMENT_STATUS_FINISHED = 'Finished';
    /** требуется подписать извещение о получении */
    const DOCUMENT_STATUS_HAVE_TO_CREATE_RECEIPT = 'HaveToCreateReceipt';
    /** документ с незавершенным документооборотом */
    const DOCUMENT_STATUS_NOT_FINISHED = 'NotFinished';
    /** имеет смысл только для счетов-фактур; документ, по которому было запрошено уточнение */
    const DOCUMENT_STATUS_INVOICE_AMENDMENT_REQUESTED = 'InvoiceAmendmentRequested';
    /** документ, по которому было запрошено аннулирование */
    const DOCUMENT_STATUS_REVOCATION_IS_REQUESTED_BY_ME = 'RevocationIsRequestedByMe';
    /** документ, по которому контрагент запросил аннулирование */
    const DOCUMENT_STATUS_REQUESTS_MY_REVOCATION = 'RequestsMyRevocation';
    /** аннулированный документ */
    const DOCUMENT_STATUS_REVOCATION_ACCEPTED = 'RevocationAccepted';
    /** документ, запрос на аннулирование которого был отклонен */
    const DOCUMENT_STATUS_REVOCATION_REJECTED = 'RevocationRejected';
    /** документ, запрос на аннулирование которого был согласован */
    const DOCUMENT_STATUS_REVOCATION_APPROVED = 'RevocationApproved';
    /** документ с отказом согласования запроса на аннулирование */
    const DOCUMENT_STATUS_REVOCATION_DISAPPROVED = 'RevocationDisapproved';
    /** документ, находящийся на согласовании запроса аннулирования */
    const DOCUMENT_STATUS_WAITING_FOR_REVOCATION_APPROVEMENT = 'WaitingForRevocationApprovement';
    /** неаннулированный документ */
    const DOCUMENT_STATUS_NOT_REVOKED = 'NotRevoked';
    /** документ в ожидании подписи промежуточного получателя */
    const DOCUMENT_STATUS_WAITING_FOR_PROXY_SIGNATURE = 'WaitingForProxySignature';
    /** документ с подписью промежуточного получателя */
    const DOCUMENT_STATUS_WITH_PROXY_SIGNATURE = 'WithProxySignature';
    /** документ с невалидной подписью промежуточного получателя, требующий повторного подписания и отправки */
    const DOCUMENT_STATUS_INVALID_PROXY_SIGNATURE = 'InvalidProxySignature';
    /** документ с отказом от формирования подписи промежуточным получателем */
    const DOCUMENT_STATUS_PROXY_SIGNATURE_REJECTED = 'ProxySignatureRejected';
    /** документ в ожидании получения извещения о получении счета-фактуры */
    const DOCUMENT_STATUS_WAITING_FOR_INVOICE_RECEIPT = 'WaitingForInvoiceReceipt';
    /** документ в ожидании получения извещения о получении */
    const DOCUMENT_STATUS_WAITING_FOR_RECEIPT = 'WaitingForReceipt';
    /** документ, по которому контрагент запросил подпись */
    const DOCUMENT_STATUS_REQUESTS_MY_SIGNATURE = 'RequestsMySignature';
    /** документ, с ошибкой доставки в роуминге */
    const DOCUMENT_STATUS_ROAMING_NOTIFICATION_ERROR = 'RoamingNotificationError';


    /** @var string */
    private $filterDocumentType;
    /** @var  string */
    private $filterDocumentClass;
    /** @var  string */
    private $filterDocumentStatus;
    /** @var  string */
    private $counteragentBoxId;
    /** @var  string */
    private $toDepartmentId;
    /** @var  \DateTime */
    private $fromDate;
    /** @var  \DateTime */
    private $toDate;
    /** @var  \DateTime */
    private $fromDocumentDate;
    /** @var  \DateTime */
    private $toDocumentDate;
    /** @var  string */
    private $departmentId;
    /** @var  boolean */
    private $excludeSubdepartments;

    static public function create()
    {
        return new self;
    }

    public function __construct()
    {
        $this->filterDocumentType = self::DOCUMENT_TYPE_ANY;
        $this->filterDocumentClass = self::DOCUMENT_CLASS_INTERNAL;
        $this->filterDocumentStatus = self::DOCUMENT_STATUS_ANY;
    }

    /**
     * @return string
     */
    public function getFilterDocumentType()
    {
        return $this->filterDocumentType;
    }

    /**
     * @param string|DocumentType $filterDocumentType
     *
     * @return $this
     */
    public function setFilterDocumentType($filterDocumentType)
    {
        if ($filterDocumentType instanceof DocumentType) {
            $this->filterDocumentType = $filterDocumentType->name();
        } else {
            $this->filterDocumentType = $filterDocumentType;
        }

        return $this;
    }

    /**
     * @return mixed
     */
    public function getFilterDocumentClass()
    {
        return $this->filterDocumentClass;
    }

    /**
     * @param mixed $filterDocumentClass
     *
     * @return $this
     */
    public function setFilterDocumentClass($filterDocumentClass)
    {
        $this->filterDocumentClass = $filterDocumentClass;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getFilterDocumentStatus()
    {
        return $this->filterDocumentStatus;
    }

    /**
     * @param mixed $filterDocumentStatus
     *
     * @return $this
     */
    public function setFilterDocumentStatus($filterDocumentStatus)
    {
        $this->filterDocumentStatus = $filterDocumentStatus;

        return $this;
    }

    /**
     * @return string
     */
    public function getCounteragentBoxId()
    {
        return $this->counteragentBoxId;
    }

    /**
     * @param string $counteragentBoxId
     *
     * @return $this
     */
    public function setCounteragentBoxId($counteragentBoxId)
    {
        $this->counteragentBoxId = $counteragentBoxId;
        return $this;
    }

    /**
     * @return string
     */
    public function getToDepartmentId()
    {
        return $this->toDepartmentId;
    }

    /**
     * @param string $toDepartmentId
     *
     * @return $this
     */
    public function setToDepartmentId($toDepartmentId)
    {
        $this->toDepartmentId = $toDepartmentId;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getFromDate()
    {
        return $this->fromDate;
    }

    /**
     * @param \DateTime $fromDate
     *
     * @return $this
     */
    public function setFromDate(\DateTime $fromDate = null)
    {
        $this->fromDate = $fromDate;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getToDate()
    {
        return $this->toDate;
    }

    /**
     * @param \DateTime $toDate
     *
     * @return $this
     */
    public function setToDate(\DateTime $toDate = null)
    {
        $this->toDate = $toDate;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getFromDocumentDate()
    {
        return $this->fromDocumentDate;
    }

    /**
     * @param \DateTime $fromDocumentDate
     *
     * @return $this
     */
    public function setFromDocumentDate(\DateTime $fromDocumentDate = null)
    {
        $this->fromDocumentDate = $fromDocumentDate;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getToDocumentDate()
    {
        return $this->toDocumentDate;
    }

    /**
     * @param \DateTime $toDocumentDate
     *
     * @return $this
     */
    public function setToDocumentDate(\DateTime $toDocumentDate = null)
    {
        $this->toDocumentDate = $toDocumentDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getDepartmentId()
    {
        return $this->departmentId;
    }

    /**
     * @param string $departmentId
     *
     * @return $this
     */
    public function setDepartmentId($departmentId)
    {
        $this->departmentId = $departmentId;
        return $this;
    }

    /**
     * @return bool
     */
    public function isExcludeSubdepartments()
    {
        return $this->excludeSubdepartments;
    }

    /**
     * @param bool $excludeSubdepartments
     *
     * @return $this
     */
    public function setExcludeSubdepartments($excludeSubdepartments)
    {
        $this->excludeSubdepartments = $excludeSubdepartments;
        return $this;
    }

    private function buildFilterCategory()
    {
        return sprintf('%s.%s%s', $this->filterDocumentType, $this->filterDocumentClass, $this->filterDocumentStatus);
    }

    public function toFilter()
    {
        $filter = [
            'filterCategory'    =>  $this->buildFilterCategory(),
            'counteragentBoxId' =>  $this->counteragentBoxId,
            'toDepartmentId'    =>  $this->toDepartmentId,
            'timestampFromTicks' => $this->fromDate?DateHelper::convertDateTimeToTicks($this->fromDate):null,
            'timestampToTicks'  =>  $this->toDate?DateHelper::convertDateTimeToTicks($this->toDate):null,
            'fromDocumentDate'  =>  $this->fromDocumentDate?$this->fromDocumentDate->format('d.m.Y'):null,
            'toDocumentDate'    =>  $this->toDocumentDate?$this->toDocumentDate->format('d.m.Y'):null,
            'departmentId'      =>  $this->departmentId,
            'excludeSubdepartments' =>  $this->excludeSubdepartments
        ];

        return $filter;


    }
}