<?php

namespace Agrifun\DAO;

use Agrifun\Domain\Cooltainer;

class CooltainerDAO extends DAO
{


    /**
     * Return a list of all cooltainers
     *
     * @return array A list of all cooltainers.
     */
    public function findAll() {
        $sql = "select * from cooltainer";
        $result = $this->getDb()->fetchAll($sql);
        
        // Convert query result to an array of domain objects
        $cooltainers = array();
        foreach ($result as $row) {
            $cooltainerId = $row['id'];
            $cooltainers[$cooltainerId] = $this->buildDomainObject($row);
        }
        return $cooltainers;
    }

    /**
     * Returns a cooltainer matching the supplied id.
     *
     * @param integer $id
     *
     * @return \Agrifun\Domain\Cooltainer
     */
    public function find($id) {
        $sql = "select * from cooltainer where id=?";
        $row = $this->getDb()->fetchAssoc($sql, array($id));

        if ($row)
            return $this->buildDomainObject($row);

    }


    /**
     * Create a cooltainer into the database.
     *
     * @param \Agrifun\Domain\Cooltainer $cooltainer The cooltainer to create
     */
    public function create(Cooltainer $cooltainer) {
        $cooltainerData = array(
            'reference' => $cooltainer->getReference(),
            'address' => $cooltainer->getAddress(),
            'latitude' => $cooltainer->getLatitude(),
            'longitude' => $cooltainer->getLongitude(),
            'temperature' => $cooltainer->getTemperature(),
            'humidity' => $cooltainer->getHumidity(),
            'brightness' => $cooltainer->getBrightness(),
            'air_filter_on' => $cooltainer->isAirFilterOn(),
            'door_open' => $cooltainer->isDoorOpen(),
            'light_on' => $cooltainer->isLightOn(),
            'bees_box_open' => $cooltainer->isBeesBoxOpen(),
            'water_consumed' => $cooltainer->getWaterConsumed(),
            'electricity_consumed' => $cooltainer->getElectricityConsumed(),
            'last_maintenance' => $cooltainer->getLastMaintenance()
        );

        foreach($cooltainerData as $data){
            if($data === null){
                return 0;
            }
        }

        $response = $this->getDb()->insert('cooltainer', $cooltainerData);
        $id = $this->getDb()->lastInsertId();
        $cooltainer->setId($id);

        return $response;
    }


    /**
     * Creates an Cooltainer object based on a DB row.
     *
     * @param array $row The DB row containing Cooltainer data.
     * @return \Agrifun\Domain\Cooltainer
     */
    protected function buildDomainObject(array $row) {
        $cooltainer = new Cooltainer();
        $cooltainer->setId($row['id']);
        $cooltainer->setReference($row['reference']);
        $cooltainer->setAddress($row['address']);
        $cooltainer->setLatitude($row['latitude']);
        $cooltainer->setLongitude($row['longitude']);
        $cooltainer->setTemperature($row['temperature']);
        $cooltainer->setHumidity($row['humidity']);
        $cooltainer->setBrightness($row['brightness']);
        $cooltainer->setIsAirFilterOn($row['air_filter_on']);
        $cooltainer->setIsDoorOpen($row['door_open']);
        $cooltainer->setIsLightOn($row['light_on']);
        $cooltainer->setIsBeesBoxOpen($row['bees_box_open']);
        $cooltainer->setWaterConsumed($row['water_consumed']);
        $cooltainer->setElectricityConsumed($row['electricity_consumed']);
        $cooltainer->setLastMaintenance($row['last_maintenance']);
        return $cooltainer;
    }

}