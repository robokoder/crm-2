<?php
namespace famoser\crm\Models\Database;
use famoser\crm\Models\Database\Base\BasePersonModel;
use famoser\phpFrame\Models\Database\BasePersonalModel;


/**
 * Created by PhpStorm.
 * User: FlorianAlexander
 * Date: 5/18/2015
 * Time: 7:44 PM
 */
class CustomerModel extends BasePersonModel
{
    private $Company;
    private $CustomerSinceDate;

    private $Projects;

    public function getPersonalIdentification()
    {
        if ($this->getPerson() != null) {
            return $this->getPerson()->getPersonalIdentification() . " (" . $this->getCompany() . ")";
        }
        return $this->getCompany();
    }

    public function getIdentification()
    {
        return $this->getPerson()->getIdentification() . " (" . $this->getCompany() . ")";
    }

    public function getDatabaseArray()
    {
        $props = array("Company" => $this->getCustomerSinceDate(), "CustomerSinceDate" => $this->getCustomerSinceDate());
        return array_merge($props, parent::getDatabaseArray());
    }

    /**
     * @return string
     */
    public function getCompany()
    {
        return $this->Company;
    }

    /**
     * @param mixed $Company
     */
    public function setCompany($Company)
    {
        $this->Company = $Company;
    }

    /**
     * @return string
     */
    public function getCustomerSinceDate()
    {
        return $this->CustomerSinceDate;
    }

    /**
     * @param string $CustomerSinceDate
     */
    public function setCustomerSinceDate($CustomerSinceDate)
    {
        $this->CustomerSinceDate = $CustomerSinceDate;
    }

    /**
     * @return ProjectModel[]
     */
    public function getProjects()
    {
        return $this->Projects;
    }

    /**
     * @param ProjectModel[] $Projects
     */
    public function setProjects($Projects)
    {
        $this->Projects = $Projects;
    }
}