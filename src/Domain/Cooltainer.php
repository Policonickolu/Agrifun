<?php

namespace Agrifun\Domain;

class Cooltainer
{

	/**
	 * Cooltainer id.
	 *
	 * @var integer
	 */
	private $id;

	/**
	 * Cooltainer reference.
	 *
	 * @var string
	 */
	private $reference;

	/**
	 * Cooltainer address.
	 *
	 * @var string
	 */
	private $address;

	/**
	 * Cooltainer latitude.
	 *
	 * @var float
	 */
	private $latitude;

	/**
	 * Cooltainer longitude.
	 *
	 * @var float
	 */
	private $longitude;

	/**
	 * Cooltainer temperature.
	 *
	 * @var float
	 */
	private $temperature;

	/**
	 * Cooltainer humidity.
	 *
	 * @var float
	 */
	private $humidity;

	/**
	 * Cooltainer brightness.
	 *
	 * @var float
	 */
	private $brightness;

	/**
	 * Cooltainer if the air filter is working.
	 *
	 * @var boolean
	 */
	private $airFilterOn;

	/**
	 * Cooltainer if the door is open.
	 *
	 * @var boolean
	 */
	private $doorOpen;

	/**
	 * Cooltainer if the ligths are on.
	 *
	 * @var boolean
	 */
	private $lightOn;

	/**
	 * Cooltainer if the bees box is open.
	 *
	 * @var boolean
	 */
	private $beesBoxOpen;

	/**
	 * Cooltainer water consumed.
	 *
	 * @var int
	 */
	private $waterConsumed;

	/**
	 * Cooltainer electricity consumed.
	 *
	 * @var int
	 */
	private $electricityConsumed;

	/**
	 * Cooltainer last maintenance date.
	 *
	 * @var date
	 */
	private $lastMaintenance;


	public function getId() {
		return $this->id;
	}

	public function setId($id) {
		$this->id = $id;
		return $this;
	}

	public function getReference() {
		return $this->reference;
	}

	public function setReference($reference) {
		$this->reference = $reference;
		return $this;
	}

	public function getAddress() {
		return $this->address;
	}

	public function setAddress($address) {
		$this->address = $address;
		return $this;
	}

	public function getLatitude() {
		return $this->latitude;
	}

	public function setLatitude($latitude) {
		$this->latitude = $latitude;
		return $this;
	}

	public function getLongitude() {
		return $this->longitude;
	}

	public function setLongitude($longitude) {
		$this->longitude = $longitude;
		return $this;
	}

	public function getTemperature() {
		return $this->temperature;
	}

	public function setTemperature($temperature) {
		$this->temperature = $temperature;
		return $this;
	}

	public function getHumidity() {
		return $this->humidity;
	}

	public function setHumidity($humidity) {
		$this->humidity = $humidity;
		return $this;
	}

	public function getBrightness() {
		return $this->brightness;
	}

	public function setBrightness($brightness) {
		$this->brightness = $brightness;
		return $this;
	}

	public function isAirFilterOn() {
		return $this->airFilterOn;
	}

	public function setIsAirFilterOn($airFilterOn) {
		$this->airFilterOn = $airFilterOn;
		return $this;
	}

	public function isDoorOpen() {
		return $this->doorOpen;
	}

	public function setIsDoorOpen($doorOpen) {
		$this->doorOpen = $doorOpen;
		return $this;
	}

	public function isLightOn() {
		return $this->lightOn;
	}

	public function setIsLightOn($lightOn) {
		$this->lightOn = $lightOn;
		return $this;
	}

	public function isBeesBoxOpen() {
		return $this->beesBoxOpen;
	}

	public function setIsBeesBoxOpen($beesBoxOpen) {
		$this->beesBoxOpen = $beesBoxOpen;
		return $this;
	}

	public function getWaterConsumed() {
		return $this->waterConsumed;
	}

	public function setWaterConsumed($waterConsumed) {
		$this->waterConsumed = $waterConsumed;
		return $this;
	}

	public function getElectricityConsumed() {
		return $this->electricityConsumed;
	}

	public function setElectricityConsumed($electricityConsumed) {
		$this->electricityConsumed = $electricityConsumed;
		return $this;
	}

	public function getLastMaintenance() {
		return $this->lastMaintenance;
	}

	public function setLastMaintenance($lastMaintenance) {
		$this->lastMaintenance = $lastMaintenance;
		return $this;
	}
}
