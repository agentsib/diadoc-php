<?php
/**
 * User: ikovalenko
 */

namespace AgentSIB\Diadoc;


use AgentSIB\Diadoc\Api\Proto\AsyncMethodResult;
use AgentSIB\Diadoc\Api\Proto\Counteragent;
use AgentSIB\Diadoc\Api\Proto\CounteragentCertificateList;
use AgentSIB\Diadoc\Api\Proto\CounteragentList;
use AgentSIB\Diadoc\Api\Proto\CounteragentStatus;
use AgentSIB\Diadoc\Api\Proto\Department;
use AgentSIB\Diadoc\Api\Proto\GetOrganizationsByInnListResponse;
use AgentSIB\Diadoc\Api\Proto\InvitationDocument;
use AgentSIB\Diadoc\Api\Proto\Organization;
use AgentSIB\Diadoc\Api\Proto\OrganizationUserPermissions;
use AgentSIB\Diadoc\Api\Proto\OrganizationUsersList;

class OrganizationApi
{

    /** @var  DiadocApi */
    private $diadocApi;
    /** @var  string */
    private $orgId;

    /**
     * OrganizationApi constructor.
     * @param DiadocApi $diadocApi
     * @param string $orgId
     */
    public function __construct(DiadocApi $diadocApi, $orgId)
    {
        $this->diadocApi = $diadocApi;
        $this->orgId = $orgId;
    }


    /**
     * @return DiadocApi
     */
    public function getDiadocApi()
    {
        return $this->diadocApi;
    }

    /**
     * @return Organization
     */
    public function getOrganization()
    {
        return $this->diadocApi->getOrganizationById($this->orgId);
    }

    /**
     * @param $departmentId
     * @return Department
     */
    public function getDepartment($departmentId)
    {
        return $this->diadocApi->getDepartment($this->orgId, $departmentId);
    }

    /**
     * @return OrganizationUserPermissions
     */
    public function getMyPermissions()
    {
        return $this->diadocApi->getMyPermissions($this->orgId);
    }

    /**
     * @param array $innList
     * @return GetOrganizationsByInnListResponse
     */
    public function getOrganizationsByInnList($innList = [])
    {
        return $this->diadocApi->getOrganizationsByInnList($this->orgId, $innList);
    }

    /**
     * @return OrganizationUsersList
     */
    public function getOrganizationUsers()
    {
        return $this->diadocApi->getOrganizationUsers($this->orgId);
    }

    /**
     * @param $counteragentOrgId
     * @param $myDepartmentId
     * @param null $comment
     *
     * @return mixed
     */
    public function acquireCounteragent($counteragentOrgId, $myDepartmentId, $comment = null)
    {
        return $this->diadocApi->acquireCounteragent($this->orgId, $counteragentOrgId, $myDepartmentId, $comment);
    }

    /**
     * @param $counteragentOrgId
     * @param $myDepartmentId
     * @param InvitationDocument|null $invitationDocument
     * @param null $messageToContragent
     *
     * @return AsyncMethodResult
     */
    public function acquireCounteragentWithDocument($counteragentOrgId, $myDepartmentId, InvitationDocument $invitationDocument = null, $messageToContragent = null)
    {
        return $this->diadocApi->acquireCounteragentWithDocument($this->orgId, $counteragentOrgId, $myDepartmentId, $invitationDocument, $messageToContragent);
    }

    /**
     * @param $counteragentInn
     * @param $myDepartmentId
     * @param InvitationDocument|null $invitationDocument
     * @param null $messageToContragent
     *
     * @return AsyncMethodResult|\Protobuf\Message
     */
    public function acquireCounteragentByInnWithDocument($counteragentInn, $myDepartmentId = null, InvitationDocument $invitationDocument = null, $messageToContragent = null)
    {
        return $this->diadocApi->acquireCounteragentByInnWithDocument($this->orgId, $counteragentInn, $myDepartmentId, $invitationDocument, $messageToContragent);
    }

    /**
     * @param $counteragentOrgId
     * @param null $comment
     *
     * @return bool
     */
    public function breakWithCounteragent($counteragentOrgId, $comment = null)
    {
        return $this->diadocApi->breakWithCounteragent($this->orgId, $counteragentOrgId, $comment);
    }

    /**
     * @param $counteragentOrgId
     *
     * @return Counteragent
     */
    public function getCountragent($counteragentOrgId)
    {
        return $this->diadocApi->getCountragent($this->orgId, $counteragentOrgId);
    }

    /**
     * @param $counteragentOrgId
     *
     * @return Counteragent
     */
    public function getCountragentV2($counteragentOrgId)
    {
        return $this->diadocApi->getCountragentV2($this->orgId, $counteragentOrgId);
    }

    /**
     * @param CounteragentStatus|null $counteragentStatus
     * @param null $afterIndexKey
     *
     * @return CounteragentList
     */
    public function getCountragents(CounteragentStatus $counteragentStatus = null, $afterIndexKey = null)
    {
        return $this->diadocApi->getCountragents($this->orgId, $counteragentStatus, $afterIndexKey);
    }

    /**
     * @param CounteragentStatus|null $counteragentStatus
     * @param null $afterIndexKey
     *
     * @return CounteragentList
     */
    public function getCountragentsV2(CounteragentStatus $counteragentStatus = null, $afterIndexKey = null)
    {
        return $this->diadocApi->getCountragentsV2($this->orgId, $counteragentStatus, $afterIndexKey);
    }

    /**
     * @param $counteragentOrgId
     * @return CounteragentCertificateList
     */
    public function getCounteragentCertificates($counteragentOrgId)
    {
        return $this->diadocApi->getCounteragentCertificates($this->orgId, $counteragentOrgId);
    }

}