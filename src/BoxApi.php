<?php
/**
 * User: ikovalenko
 */

namespace AgentSIB\Diadoc;


use AgentSIB\Diadoc\Api\Proto\Box;
use AgentSIB\Diadoc\Api\Proto\Docflow\GetDocflowBatchRequest;
use AgentSIB\Diadoc\Api\Proto\Docflow\GetDocflowBatchResponse;
use AgentSIB\Diadoc\Api\Proto\Docflow\GetDocflowsByPacketIdResponse;
use AgentSIB\Diadoc\Api\Proto\Docflow\SearchDocflowsResponse;
use AgentSIB\Diadoc\Api\Proto\Docflow\SearchScope;
use AgentSIB\Diadoc\Api\Proto\Documents\Document;
use AgentSIB\Diadoc\Api\Proto\Documents\DocumentList;
use AgentSIB\Diadoc\Api\Proto\Events\BoxEvent;
use AgentSIB\Diadoc\Api\Proto\Events\BoxEventList;
use AgentSIB\Diadoc\Api\Proto\Events\Message;
use AgentSIB\Diadoc\Api\Proto\Organization;
use AgentSIB\Diadoc\Api\Proto\SortDirection;
use AgentSIB\Diadoc\Filter\DocumentsFilter;

class BoxApi
{
    /** @var  DiadocApi */
    private $diadocApi;
    /** @var  string */
    private $boxId;
    /** @var  OrganizationApi */
    private $organizationApi;

    /**
     * BoxApi constructor.
     *
     * @param DiadocApi $diadocApi
     * @param string $boxId
     */
    public function __construct(DiadocApi $diadocApi, $boxId)
    {
        $this->diadocApi = $diadocApi;
        $this->boxId = $boxId;
    }

    /**
     * @return DiadocApi
     */
    public function getDiadocApi()
    {
        return $this->diadocApi;
    }

    /**
     * @return Box
     */
    public function getBox()
    {
        return $this->diadocApi->getBox($this->boxId);
    }

    /**
     * @return Organization
     */
    public function getOrganization()
    {
        return $this->getBox()->getOrganization();
    }

    /**
     * @return OrganizationApi
     */
    public function getOrganizationApi()
    {
        if (!$this->organizationApi) {
            $this->organizationApi = new OrganizationApi(
                $this->diadocApi,
                $this->getOrganization()->getOrgId()
            );
        }

        return $this->organizationApi;
    }

    /**
     * @param $messageId
     * @param $entityId
     *
     * @return mixed
     */
    public function getEntityContent($messageId, $entityId)
    {
        return $this->diadocApi->getEntityContent($this->boxId, $messageId, $entityId);
    }

    /**
     * @param $messageId
     * @param null $entityId
     * @param null $originalSignature
     *
     * @return Message
     */
    public function getMessage($messageId, $entityId = null, $originalSignature = null)
    {
        return $this->diadocApi->getMessage($this->boxId, $messageId, $entityId, $originalSignature);
    }

    /**
     * @param $messageId
     * @param null $documentId
     *
     * @return bool
     */
    public function delete($messageId, $documentId = null)
    {
        return $this->diadocApi->delete($this->boxId, $messageId, $documentId);
    }

    public function forwardDocument($toBoxId, $documentId)
    {
        return $this->diadocApi->forwardDocument($this->boxId, $toBoxId, $documentId);
    }

    /**
     * @param $messageId
     * @param $entityId
     *
     * @return Document
     */
    public function getDocument($messageId, $entityId)
    {
        return $this->diadocApi->getDocument($this->boxId, $messageId, $entityId);
    }

    /**
     * @param DocumentsFilter|null $documentsFilter
     * @param SortDirection|null $sortDirection
     * @param null $afterIndexKey
     *
     * @return DocumentList
     */
    public function getDocuments(DocumentsFilter $documentsFilter = null, SortDirection $sortDirection = null, $afterIndexKey = null)
    {
        return $this->diadocApi->getDocuments($this->boxId, $documentsFilter, $sortDirection, $afterIndexKey);
    }

    /**
     * @param GetDocflowBatchRequest $batchRequest
     *
     * @return GetDocflowBatchResponse
     */
    public function getDocflows(GetDocflowBatchRequest $batchRequest)
    {
        return $this->diadocApi->getDocflows($this->boxId, $batchRequest);
    }

    /**
     * @param $packetId
     * @param bool $injectEntityContent
     * @param null $afterIndexKey
     * @param int $count
     *
     * @return GetDocflowsByPacketIdResponse
     */
    public function getDocflowsByPacketId($packetId, $injectEntityContent = false, $afterIndexKey = null, $count = 100)
    {
        return $this->diadocApi->getDocflowsByPacketId($this->boxId, $packetId, $injectEntityContent, $afterIndexKey, $count);
    }

    /**
     * @param $queryString
     * @param SearchScope|null $searchScope
     * @param null $firstIndex
     * @param int $count
     *
     * @return SearchDocflowsResponse
     */
    public function searchDocflows($queryString, SearchScope $searchScope = null, $firstIndex = null, $count = 100)
    {
        return $this->diadocApi->searchDocflows($this->boxId, $queryString, $searchScope, $firstIndex, $count);
    }

    public function getDocflowEvents
    (
        \DateTime $from = null,
        \DateTime $to = null,
        SortDirection $sortDirection = null,
        $populateDocuments = false,
        $populatePreviousDocumentStates = false,
        $injectEntityContent = false,
        $afterIndexKey = null
    ) {
        return $this->diadocApi->getDocflowEvents(
            $this->boxId,
            $from,
            $to,
            $sortDirection,
            $populateDocuments,
            $populatePreviousDocumentStates,
            $injectEntityContent,
            $afterIndexKey
        );
    }

    /**
     * @param $eventId
     *
     * @return BoxEvent
     */
    public function getEvent($eventId)
    {
        return $this->diadocApi->getEvent($this->boxId, $eventId);
    }

    /**
     * @param null $afterEventId
     * @return BoxEventList
     */
    public function getNewEvents($afterEventId = null)
    {
        return $this->diadocApi->getNewEvents($this->boxId, $afterEventId);
    }

}