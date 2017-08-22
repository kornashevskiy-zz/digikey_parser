<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 18.08.17
 * Time: 15:22
 */

namespace ParserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 *
 * @ORM\Entity
 * @ORM\Table(name="digikey")
 */
class Digikey
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="pdf", type="text", nullable=true)
     */
    private $pdf;

    /**
     * @var string
     *
     * @ORM\Column(name="category", type="string", length=255, nullable=true)
     */
    private $category;

    /**
     * @var string
     *
     * @ORM\Column(name="sub_category", type="string", length=255, nullable=true)
     */
    private $sudCategory;

    /**
     * @var string
     *
     * @ORM\Column(name="shell_size_insert", type="text", nullable=true)
     */
    private $shellSizeInsert;

    /**
     * @var string
     *
     * @ORM\Column(name="shell_material_finish", type="text", nullable=true)
     */
    private $shellMaterialFinish;

    /**
     * @var string
     *
     * @ORM\Column(name="shell_size_mil", type="text", nullable=true)
     */
    private $shellSizeMIL;

    /**
     * @var string
     *
     * @ORM\Column(name="image", type="text", nullable=true)
     */
    private $image;

    /**
     * @var string
     *
     * @ORM\Column(name="digi_key_part_number", type="string", length=255, nullable=true)
     */
    private $digiKeyPartNumber;

    /**
     *@var string
     * @ORM\Column(name="manufacturer_part_number", type="string", length=255, nullable=true)
     */
    private $manufacturerPartNumber;

    /**
     *@var string
     * @ORM\Column(name="manufacturer", type="string", length=255, nullable=true)
     */
    private $manufacturer;

    /**
     * @var string
     * @ORM\Column(name="description", type="text", nullable=true)
     */
    private $description;

    /**
     * @var string
     * @ORM\Column(name="quantity_available", type="string", length=255, nullable=true)
     */
    private $quantityAvailable;

    /**
     * @var string
     * @ORM\Column(name="unit_price_usd", type="string", length=255, nullable=true)
     */
    private $unitPriceUsd;

    /**
     * @var string
     * @ORM\Column(name="minimum_quantity", type="string", length=255, nullable=true)
     */
    private $minimumQuantity;

    /**
     * @var string
     * @ORM\Column(name="packaging", type="string", length=255, nullable=true)
     */
    private $packaging;

    /**
     * @var string
     * @ORM\Column(name="series", type="string", length=255, nullable=true)
     */
    private $series;

    /**
     * @var string
     * @ORM\Column(name="part_status", type="string", length=255, nullable=true)
     */
    private $partStatus;

    /**
     * @var string
     * @ORM\Column(name="type", type="string", length=255, nullable=true)
     */
    private $type;

    /**
     * @var string
     * @ORM\Column(name="contact_type", type="string", length=255, nullable=true)
     */
    private $contactType;

    /**
     * @var string
     * @ORM\Column(name="contact_size", type="string", length=255, nullable=true)
     */
    private $contactSize;

    /**
     * @var string
     * @ORM\Column(name="wire_gauge_range_awg", type="string", length=255, nullable=true)
     */
    private $wireGaugeRangeAWG;

    /**
     * @var string
     * @ORM\Column(name="wire_gauge_or_range_mm²", type="string", length=255, nullable=true)
     */
    private $wireGaugeOrRange_mm²;

    /**
     * @var string
     * @ORM\Column(name="wire_gauge_or_range_coaxial", type="string", length=255, nullable=true)
     */
    private $wireGaugeOrRangeCoaxial;

    /**
     * @var string
     * @ORM\Column(name="contact_termination", type="string", length=255, nullable=true)
     */
    private $contactTermination;

    /**
     * @var string
     * @ORM\Column(name="contact_material", type="string", length=255, nullable=true)
     */
    private $contactMaterial;

    /**
     * @var string
     * @ORM\Column(name="contact_finish", type="string", length=255, nullable=true)
     */
    private $contactFinish;

    /**
     * @var string
     * @ORM\Column(name="contact_finish_thickness", type="string", length=255, nullable=true)
     */
    private $contactFinishThickness;

    /**
     * @var string
     * @ORM\Column(name="termination_finish", type="string", length=255, nullable=true)
     */
    private $terminationFinish;

    /**
     * @var string
     * @ORM\Column(name="features", type="string", length=255, nullable=true)
     */
    private $features;

    /**
     * @var string
     * @ORM\Column(name="number_of_positions", type="string", length=255, nullable=true)
     */
    private $numberOfPositions;

    /**
     * @var string
     * @ORM\Column(name="pitch", type="string", length=255, nullable=true)
     */
    private $pitch;

    /**
     * @var string
     * @ORM\Column(name="style", type="string", length=255, nullable=true)
     */
    private $style;

    /**
     * @var string
     * @ORM\Column(name="for_use_with_related_products", type="string", length=255, nullable=true)
     */
    private $forUseWithRelatedProducts;

    /**
     * @var string
     * @ORM\Column(name="color", type="string", length=255, nullable=true)
     */
    private $color;

    /**
     * @var string
     * @ORM\Column(name="legend", type="string", length=255, nullable=true)
     */
    private $legend;

    /**
     * @var string
     * @ORM\Column(name="length_overall", type="string", length=255, nullable=true)
     */
    private $lengthOverall;

    /**
     * @var string
     * @ORM\Column(name="length_pin", type="string", length=255, nullable=true)
     */
    private $lengthPin;

    /**
     * @var string
     * @ORM\Column(name="insulation", type="string", length=255, nullable=true)
     */
    private $insulation;

    /**
     * @var string
     * @ORM\Column(name="terminal_block_type", type="string", length=255, nullable=true)
     */
    private $terminalBlockType;

    /**
     * @var string
     * @ORM\Column(name="number_of_circuits", type="string", length=255, nullable=true)
     */
    private $numberOfCircuits;

    /**
     * @var string
     * @ORM\Column(name="number_of_wire_entries", type="string", length=255, nullable=true)
     */
    private $numberOfWireEntries;

    /**
     * @var string
     * @ORM\Column(name="number_of_rows", type="string", length=255, nullable=true)
     */
    private $numberOfRows;

    /**
     * @var string
     * @ORM\Column(name="current_rating", type="string", length=255, nullable=true)
     */
    private $currentRating;

    /**
     * @var string
     * @ORM\Column(name="voltage_rating", type="string", length=255, nullable=true)
     */
    private $voltageRating;

    /**
     * @var string
     * @ORM\Column(name="wire_gauge", type="string", length=255, nullable=true)
     */
    private $wireGauge;

    /**
     * @var string
     * @ORM\Column(name="top_termination", type="string", length=255, nullable=true)
     */
    private $topTermination;

    /**
     * @var string
     * @ORM\Column(name="bottom_termination", type="string", length=255, nullable=true)
     */
    private $bottomTermination;

    /**
     * @var string
     * @ORM\Column(name="barrier_type", type="string", length=255, nullable=true)
     */
    private $barrierType;

    /**
     * @var string
     * @ORM\Column(name="connector_style", type="string", length=255, nullable=true)
     */
    private $connectorStyle;

    /**
     * @var string
     * @ORM\Column(name="accessory_type", type="string", length=255, nullable=true)
     */
    private $accessoryType;

    /**
     * @var string
     * @ORM\Column(name="body_material", type="string", length=255, nullable=true)
     */
    private $bodyMaterial;

    /**
     * @var string
     * @ORM\Column(name="body_finish", type="string", length=255, nullable=true)
     */
    private $bodyFinish;

    /**
     * @var string
     * @ORM\Column(name="adapter_type", type="string", length=255, nullable=true)
     */
    private $adapterType;

    /**
     * @var string
     * @ORM\Column(name="conversion_type", type="string", length=255, nullable=true)
     */
    private $conversionType;

    /**
     * @var string
     * @ORM\Column(name="adapter_series", type="string", length=255, nullable=true)
     */
    private $adapterSeries;

    /**
     * @var string
     * @ORM\Column(name="center_gender", type="string", length=255, nullable=true)
     */
    private $centerGender;

    /**
     * @var string
     * @ORM\Column(name="convert_from_adapter_end", type="text", nullable=true)
     */
    private $convertFromAdapterEnd;

    /**
     * @var string
     * @ORM\Column(name="convert_to_adapter_end", type="text", nullable=true)
     */
    private $convertToAdapterEnd;

    /**
     * @var string
     * @ORM\Column(name="impedance", type="text", nullable=true)
     */
    private $impedance;

    /**
     * @var string
     * @ORM\Column(name="mounting_type", type="text", nullable=true)
     */
    private $mountingType;

    /**
     * @var string
     * @ORM\Column(name="mounting_feature", type="text", nullable=true)
     */
    private $mountingFeature;

    /**
     * @var string
     * @ORM\Column(name="fastening_type", type="text", nullable=true)
     */
    private $fasteningType;

    /**
     * @var string
     * @ORM\Column(name="frequency_max", type="text", nullable=true)
     */
    private $frequencyMax;

    /**
     * @var string
     * @ORM\Column(name="ingress_protection", type="text", nullable=true)
     */
    private $ingressProtection;

    /**
     * @var string
     * @ORM\Column(name="center_contact_plating", type="text", nullable=true)
     */
    private $centerContactPlating;

    /**
     * @var string
     * @ORM\Column(name="cable_group", type="text", nullable=true)
     */
    private $cableGroup;

    /**
     * @var string
     * @ORM\Column(name="center_conductor_diameter", type="text", nullable=true)
     */
    private $centerConductorDiameter;

    /**
     * @var string
     * @ORM\Column(name="pin_or_socket", type="text", nullable=true)
     */
    private $pinOrSocket;

    /**
     * @var string
     * @ORM\Column(name="board_thickness", type="text", nullable=true)
     */
    private $boardThickness;

    /**
     * @var string
     * @ORM\Column(name="disconnect_type", type="text", nullable=true)
     */
    private $disconnectType;

    /**
     * @var string
     * @ORM\Column(name="number_of_levels", type="text", nullable=true)
     */
    private $numberOfLevels;

    /**
     * @var string
     * @ORM\Column(name="terminal_width", type="text", nullable=true)
     */
    private $terminalWidth;

    /**
     * @var string
     * @ORM\Column(name="termination_style", type="text", nullable=true)
     */
    private $terminationStyle;

    /**
     * @var string
     * @ORM\Column(name="currentIEC", type="text", nullable=true)
     */
    private $currentIEC;

    /**
     * @var string
     * @ORM\Column(name="voltage_iec", type="text", nullable=true)
     */
    private $voltageIEC;

    /**
     * @var string
     * @ORM\Column(name="current_ul", type="text", nullable=true)
     */
    private $currentUL;

    /**
     * @var string
     * @ORM\Column(name="voltage_ul", type="text", nullable=true)
     */
    private $voltageUL;

    /**
     * @var string
     * @ORM\Column(name="termination", type="text", nullable=true)
     */
    private $termination;

    /**
     * @var string
     * @ORM\Column(name="wire_gauge_or_range_awgl", type="text", nullable=true)
     */
    private $wireGaugeOrRangeAWGL;

    /**
     * @var string
     * @ORM\Column(name="positions_per_level", type="text", nullable=true)
     */
    private $positionsPerLevel;

    /**
     * @var string
     * @ORM\Column(name="header_orientation", type="text", nullable=true)
     */
    private $headerOrientation;

    /**
     * @var string
     * @ORM\Column(name="plug_wire_entry", type="string", length=255, nullable=true)
     */
    private $plugWireEntry;

    /**
     * @var string
     * @ORM\Column(name="operating_temperature", type="string", length=255, nullable=true)
     */
    private $operatingTemperature;

    /**
     * @var string
     * @ORM\Column(name="contact_mating_finish", type="string", length=255, nullable=true)
     */
    private $contactMatingFinish;

    /**
     * @var string
     * @ORM\Column(name="process_side_connection", type="string", length=255, nullable=true)
     */
    private $processSideConnection;

    /**
     * @var string
     * @ORM\Column(name="control_side_connection", type="string", length=255, nullable=true)
     */
    private $controlSideConnection;

    /**
     * @var string
     * @ORM\Column(name="control_side_cable_retainer", type="string", length=255, nullable=true)
     */
    private $controlSideCableRetainer;

    /**
     * @var string
     * @ORM\Column(name="positions_poles", type="string", length=255, nullable=true)
     */
    private $positionsPoles;

    /**
     * @var string
     * @ORM\Column(name="voltage_rated", type="string", length=255, nullable=true)
     */
    private $voltageRated;

    /**
     * @var string
     * @ORM\Column(name="current_rating_per_contact", type="string", length=255, nullable=true)
     */
    private $currentRatingPerContact;

    /**
     * @var string
     * @ORM\Column(name="length", type="string", length=255, nullable=true)
     */
    private $length;

    /**
     * @var string
     * @ORM\Column(name="width", type="string", length=255, nullable=true)
     */
    private $width;

    /**
     * @var string
     * @ORM\Column(name="front_panel_wire_connection", type="string", length=255, nullable=true)
     */
    private $frontPanelWireConnection;

    /**
     * @var string
     * @ORM\Column(name="rear_panel_wire_connection", type="string", length=255, nullable=true)
     */
    private $rearPanelWireConnection;

    /**
     * @var string
     * @ORM\Column(name="panel_thickness", type="string", length=255, nullable=true)
     */
    private $panelThickness;

    /**
     * @var string
     * @ORM\Column(name="panel_mount_type", type="string", length=255, nullable=true)
     */
    private $panelMountType;

    /**
     * @var string
     * @ORM\Column(name="number_of_poles", type="string", length=255, nullable=true)
     */
    private $numberOfPoles;

    /**
     * @var string
     * @ORM\Column(name="line_side_connections_per_pole", type="string", length=255, nullable=true)
     */
    private $lineSideConnectionsPerPole;

    /**
     * @var string
     * @ORM\Column(name="load_side_connections_per_pole", type="string", length=255, nullable=true)
     */
    private $loadSideConnectionsPerPole;

    /**
     * @var string
     * @ORM\Column(name="line_side_connection_type", type="string", length=255, nullable=true)
     */
    private $lineSideConnectionType;

    /**
     * @var string
     * @ORM\Column(name="load_side_connection_type", type="string", length=255, nullable=true)
     */
    private $loadSideConnectionType;

    /**
     * @var string
     * @ORM\Column(name="line_side_wire_stud_size", type="string", length=255, nullable=true)
     */
    private $lineSideWireStudSize;

    /**
     * @var string
     * @ORM\Column(name="load_side_wire_stud_size", type="string", length=255, nullable=true)
     */
    private $loadSideWireStudSize;

    /**
     * @var string
     * @ORM\Column(name="housing_color", type="string", length=255, nullable=true)
     */
    private $housingColor;

    /**
     * @var string
     * @ORM\Column(name="mating_orientation", type="text", nullable=true)
     */
    private $matingOrientation;

    /**
     * @var string
     * @ORM\Column(name="orientation", type="text", nullable=true)
     */
    private $orientation;

    /**
     * @var string
     * @ORM\Column(name="current", type="string", length=255, nullable=true)
     */
    private $current;

    /**
     * @var string
     * @ORM\Column(name="voltage", type="string", length=255, nullable=true)
     */
    private $voltage;

    /**
     * @var string
     * @ORM\Column(name="wire_termination", type="string", length=255, nullable=true)
     */
    private $wireTermination;

    /**
     * @var string
     * @ORM\Column(name="gender", type="string", length=255, nullable=true)
     */
    private $gender;

    /**
     * @var string
     * @ORM\Column(name="stacking_direction", type="string", length=255, nullable=true)
     */
    private $stackingDirection;

    /**
     * @var string
     * @ORM\Column(name="height_stacking_mating", type="string", length=255, nullable=true)
     */
    private $heightStackingMating;

    /**
     * @var string
     * @ORM\Column(name="tail_type", type="text", nullable=true)
     */
    private $tailType;

    /**
     * @var string
     * @ORM\Column(name="accepts_pin_diameter", type="text", nullable=true)
     */
    private $acceptsPinDiameter;

    /**
     * @var string
     * @ORM\Column(name="mounting_hole_diameter", type="text", nullable=true)
     */
    private $mountingHoleDiameter;

    /**
     * @var string
     * @ORM\Column(name="pin_hole_diameter", type="text", nullable=true)
     */
    private $pinHoleDiameter;

    /**
     * @var string
     * @ORM\Column(name="flange_diameter", type="text", nullable=true)
     */
    private $flangeDiameter;

    /**
     * @var string
     * @ORM\Column(name="tail_diameter", type="text", nullable=true)
     */
    private $tailDiameter;

    /**
     * @var string
     * @ORM\Column(name="socket_depth", type="text",  nullable=true)
     */
    private $socketDepth;

    /**
     * @var string
     * @ORM\Column(name="table_headers", type="text", nullable=true)
     */
    private $tableHeaders;

    /**
     * @var string
     * @ORM\Column(name="connector_type", type="text", nullable=true)
     */
    private $connectorType;

    /**
     * @return string
     */
    public function getShellSizeInsert()
    {
        return $this->shellSizeInsert;
    }

    /**
     * @param string $shellSizeInsert
     */
    public function setShellSizeInsert($shellSizeInsert)
    {
        $this->shellSizeInsert = $shellSizeInsert;
    }

    /**
     * @return string
     */
    public function getShellMaterialFinish()
    {
        return $this->shellMaterialFinish;
    }

    /**
     * @param string $shellMaterialFinish
     */
    public function setShellMaterialFinish($shellMaterialFinish)
    {
        $this->shellMaterialFinish = $shellMaterialFinish;
    }

    /**
     * @return string
     */
    public function getShellSizeMIL()
    {
        return $this->shellSizeMIL;
    }

    /**
     * @param string $shellSizeMIL
     */
    public function setShellSizeMIL($shellSizeMIL)
    {
        $this->shellSizeMIL = $shellSizeMIL;
    }

    /**
     * @return string
     */
    public function getOrientation()
    {
        return $this->orientation;
    }

    /**
     * @param string $orientation
     */
    public function setOrientation($orientation)
    {
        $this->orientation = $orientation;
    }

    /**
     * @return string
     */
    public function getConnectorType()
    {
        return $this->connectorType;
    }

    /**
     * @param string $connectorType
     */
    public function setConnectorType($connectorType)
    {
        $this->connectorType = $connectorType;
    }

    /**
     * @return string
     */
    public function getTableHeaders()
    {
        return $this->tableHeaders;
    }

    /**
     * @param string $tableHeaders
     */
    public function setTableHeaders($tableHeaders)
    {
        $this->tableHeaders = $tableHeaders;
    }



    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getPdf()
    {
        return $this->pdf;
    }

    /**
     * @param string $pdf
     */
    public function setPdf($pdf)
    {
        $this->pdf = $pdf;
    }

    /**
     * @return string
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @param string $category
     */
    public function setCategory($category)
    {
        $this->category = $category;
    }

    /**
     * @return string
     */
    public function getSubCategory()
    {
        return $this->sudCategory;
    }

    /**
     * @param string $sudCategory
     */
    public function setSubCategory($sudCategory)
    {
        $this->sudCategory = $sudCategory;
    }

    /**
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param string $image
     */
    public function setImage($image)
    {
        $this->image = $image;
    }

    /**
     * @return string
     */
    public function getDigiKeyPartNumber()
    {
        return $this->digiKeyPartNumber;
    }

    /**
     * @param string $digiKeyPartNumber
     */
    public function setDigiKeyPartNumber($digiKeyPartNumber)
    {
        $this->digiKeyPartNumber = $digiKeyPartNumber;
    }

    /**
     * @return string
     */
    public function getManufacturerPartNumber()
    {
        return $this->manufacturerPartNumber;
    }

    /**
     * @param string $manufacturerPartNumber
     */
    public function setManufacturerPartNumber($manufacturerPartNumber)
    {
        $this->manufacturerPartNumber = $manufacturerPartNumber;
    }

    /**
     * @return string
     */
    public function getManufacturer()
    {
        return $this->manufacturer;
    }

    /**
     * @param string $manufacturer
     */
    public function setManufacturer($manufacturer)
    {
        $this->manufacturer = $manufacturer;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return string
     */
    public function getQuantityAvailable()
    {
        return $this->quantityAvailable;
    }

    /**
     * @param string $quantityAvailable
     */
    public function setQuantityAvailable($quantityAvailable)
    {
        $this->quantityAvailable = $quantityAvailable;
    }

    /**
     * @return string
     */
    public function getUnitPriceUsd()
    {
        return $this->unitPriceUsd;
    }

    /**
     * @param string $unitPriceUsd
     */
    public function setUnitPriceUsd($unitPriceUsd)
    {
        $this->unitPriceUsd = $unitPriceUsd;
    }

    /**
     * @return string
     */
    public function getMinimumQuantity()
    {
        return $this->minimumQuantity;
    }

    /**
     * @param string $minimumQuantity
     */
    public function setMinimumQuantity($minimumQuantity)
    {
        $this->minimumQuantity = $minimumQuantity;
    }

    /**
     * @return string
     */
    public function getPackaging()
    {
        return $this->packaging;
    }

    /**
     * @param string $packaging
     */
    public function setPackaging($packaging)
    {
        $this->packaging = $packaging;
    }

    /**
     * @return string
     */
    public function getSeries()
    {
        return $this->series;
    }

    /**
     * @param string $series
     */
    public function setSeries($series)
    {
        $this->series = $series;
    }

    /**
     * @return string
     */
    public function getPartStatus()
    {
        return $this->partStatus;
    }

    /**
     * @param string $partStatus
     */
    public function setPartStatus($partStatus)
    {
        $this->partStatus = $partStatus;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @return string
     */
    public function getContactType()
    {
        return $this->contactType;
    }

    /**
     * @param string $contactType
     */
    public function setContactType($contactType)
    {
        $this->contactType = $contactType;
    }

    /**
     * @return string
     */
    public function getContactSize()
    {
        return $this->contactSize;
    }

    /**
     * @param string $contactSize
     */
    public function setContactSize($contactSize)
    {
        $this->contactSize = $contactSize;
    }

    /**
     * @return string
     */
    public function getWireGaugeRangeAWG()
    {
        return $this->wireGaugeRangeAWG;
    }

    /**
     * @param string $wireGaugeRangeAWG
     */
    public function setWireGaugeRangeAWG($wireGaugeRangeAWG)
    {
        $this->wireGaugeRangeAWG = $wireGaugeRangeAWG;
    }

    /**
     * @return string
     */
    public function getWireGaugeOrRangeMm²()
    {
        return $this->wireGaugeOrRange_mm²;
    }

    /**
     * @param string $wireGaugeOrRange_mm²
     */
    public function setWireGaugeOrRangeMm²($wireGaugeOrRange_mm²)
    {
        $this->wireGaugeOrRange_mm² = $wireGaugeOrRange_mm²;
    }

    /**
     * @return string
     */
    public function getWireGaugeOrRangeCoaxial()
    {
        return $this->wireGaugeOrRangeCoaxial;
    }

    /**
     * @param string $wireGaugeOrRangeCoaxial
     */
    public function setWireGaugeOrRangeCoaxial($wireGaugeOrRangeCoaxial)
    {
        $this->wireGaugeOrRangeCoaxial = $wireGaugeOrRangeCoaxial;
    }

    /**
     * @return string
     */
    public function getContactTermination()
    {
        return $this->contactTermination;
    }

    /**
     * @param string $contactTermination
     */
    public function setContactTermination($contactTermination)
    {
        $this->contactTermination = $contactTermination;
    }

    /**
     * @return string
     */
    public function getContactMaterial()
    {
        return $this->contactMaterial;
    }

    /**
     * @param string $contactMaterial
     */
    public function setContactMaterial($contactMaterial)
    {
        $this->contactMaterial = $contactMaterial;
    }

    /**
     * @return string
     */
    public function getContactFinish()
    {
        return $this->contactFinish;
    }

    /**
     * @param string $contactFinish
     */
    public function setContactFinish($contactFinish)
    {
        $this->contactFinish = $contactFinish;
    }

    /**
     * @return string
     */
    public function getContactFinishThickness()
    {
        return $this->contactFinishThickness;
    }

    /**
     * @param string $contactFinishThickness
     */
    public function setContactFinishThickness($contactFinishThickness)
    {
        $this->contactFinishThickness = $contactFinishThickness;
    }

    /**
     * @return string
     */
    public function getTerminationFinish()
    {
        return $this->terminationFinish;
    }

    /**
     * @param string $terminationFinish
     */
    public function setTerminationFinish($terminationFinish)
    {
        $this->terminationFinish = $terminationFinish;
    }

    /**
     * @return string
     */
    public function getFeatures()
    {
        return $this->features;
    }

    /**
     * @param string $features
     */
    public function setFeatures($features)
    {
        $this->features = $features;
    }

    /**
     * @return string
     */
    public function getNumberOfPositions()
    {
        return $this->numberOfPositions;
    }

    /**
     * @param string $numberOfPositions
     */
    public function setNumberOfPositions($numberOfPositions)
    {
        $this->numberOfPositions = $numberOfPositions;
    }

    /**
     * @return string
     */
    public function getPitch()
    {
        return $this->pitch;
    }

    /**
     * @param string $pitch
     */
    public function setPitch($pitch)
    {
        $this->pitch = $pitch;
    }

    /**
     * @return string
     */
    public function getStyle()
    {
        return $this->style;
    }

    /**
     * @param string $style
     */
    public function setStyle($style)
    {
        $this->style = $style;
    }

    /**
     * @return string
     */
    public function getForUseWithRelatedProducts()
    {
        return $this->forUseWithRelatedProducts;
    }

    /**
     * @param string $forUseWithRelatedProducts
     */
    public function setForUseWithRelatedProducts($forUseWithRelatedProducts)
    {
        $this->forUseWithRelatedProducts = $forUseWithRelatedProducts;
    }

    /**
     * @return string
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * @param string $color
     */
    public function setColor($color)
    {
        $this->color = $color;
    }

    /**
     * @return string
     */
    public function getLegend()
    {
        return $this->legend;
    }

    /**
     * @param string $legend
     */
    public function setLegend($legend)
    {
        $this->legend = $legend;
    }

    /**
     * @return string
     */
    public function getLengthOverall()
    {
        return $this->lengthOverall;
    }

    /**
     * @param string $lengthOverall
     */
    public function setLengthOverall($lengthOverall)
    {
        $this->lengthOverall = $lengthOverall;
    }

    /**
     * @return string
     */
    public function getLengthPin()
    {
        return $this->lengthPin;
    }

    /**
     * @param string $lengthPin
     */
    public function setLengthPin($lengthPin)
    {
        $this->lengthPin = $lengthPin;
    }

    /**
     * @return string
     */
    public function getInsulation()
    {
        return $this->insulation;
    }

    /**
     * @param string $insulation
     */
    public function setInsulation($insulation)
    {
        $this->insulation = $insulation;
    }

    /**
     * @return string
     */
    public function getTerminalBlockType()
    {
        return $this->terminalBlockType;
    }

    /**
     * @param string $terminalBlockType
     */
    public function setTerminalBlockType($terminalBlockType)
    {
        $this->terminalBlockType = $terminalBlockType;
    }

    /**
     * @return string
     */
    public function getNumberOfCircuits()
    {
        return $this->numberOfCircuits;
    }

    /**
     * @param string $numberOfCircuits
     */
    public function setNumberOfCircuits($numberOfCircuits)
    {
        $this->numberOfCircuits = $numberOfCircuits;
    }

    /**
     * @return string
     */
    public function getNumberOfWireEntries()
    {
        return $this->numberOfWireEntries;
    }

    /**
     * @param string $numberOfWireEntries
     */
    public function setNumberOfWireEntries($numberOfWireEntries)
    {
        $this->numberOfWireEntries = $numberOfWireEntries;
    }

    /**
     * @return string
     */
    public function getNumberOfRows()
    {
        return $this->numberOfRows;
    }

    /**
     * @param string $numberOfRows
     */
    public function setNumberOfRows($numberOfRows)
    {
        $this->numberOfRows = $numberOfRows;
    }

    /**
     * @return string
     */
    public function getCurrentRating()
    {
        return $this->currentRating;
    }

    /**
     * @param string $currentRating
     */
    public function setCurrentRating($currentRating)
    {
        $this->currentRating = $currentRating;
    }

    /**
     * @return string
     */
    public function getVoltageRating()
    {
        return $this->voltageRating;
    }

    /**
     * @param string $voltageRating
     */
    public function setVoltageRating($voltageRating)
    {
        $this->voltageRating = $voltageRating;
    }

    /**
     * @return string
     */
    public function getWireGauge()
    {
        return $this->wireGauge;
    }

    /**
     * @param string $wireGauge
     */
    public function setWireGauge($wireGauge)
    {
        $this->wireGauge = $wireGauge;
    }

    /**
     * @return string
     */
    public function getTopTermination()
    {
        return $this->topTermination;
    }

    /**
     * @param string $topTermination
     */
    public function setTopTermination($topTermination)
    {
        $this->topTermination = $topTermination;
    }

    /**
     * @return string
     */
    public function getBottomTermination()
    {
        return $this->bottomTermination;
    }

    /**
     * @param string $bottomTermination
     */
    public function setBottomTermination($bottomTermination)
    {
        $this->bottomTermination = $bottomTermination;
    }

    /**
     * @return string
     */
    public function getBarrierType()
    {
        return $this->barrierType;
    }

    /**
     * @param string $barrierType
     */
    public function setBarrierType($barrierType)
    {
        $this->barrierType = $barrierType;
    }

    /**
     * @return string
     */
    public function getConnectorStyle()
    {
        return $this->connectorStyle;
    }

    /**
     * @param string $connectorStyle
     */
    public function setConnectorStyle($connectorStyle)
    {
        $this->connectorStyle = $connectorStyle;
    }

    /**
     * @return string
     */
    public function getAccessoryType()
    {
        return $this->accessoryType;
    }

    /**
     * @param string $accessoryType
     */
    public function setAccessoryType($accessoryType)
    {
        $this->accessoryType = $accessoryType;
    }

    /**
     * @return string
     */
    public function getBodyMaterial()
    {
        return $this->bodyMaterial;
    }

    /**
     * @param string $bodyMaterial
     */
    public function setBodyMaterial($bodyMaterial)
    {
        $this->bodyMaterial = $bodyMaterial;
    }

    /**
     * @return string
     */
    public function getBodyFinish()
    {
        return $this->bodyFinish;
    }

    /**
     * @param string $bodyFinish
     */
    public function setBodyFinish($bodyFinish)
    {
        $this->bodyFinish = $bodyFinish;
    }

    /**
     * @return string
     */
    public function getAdapterType()
    {
        return $this->adapterType;
    }

    /**
     * @param string $adapterType
     */
    public function setAdapterType($adapterType)
    {
        $this->adapterType = $adapterType;
    }

    /**
     * @return string
     */
    public function getConversionType()
    {
        return $this->conversionType;
    }

    /**
     * @param string $conversionType
     */
    public function setConversionType($conversionType)
    {
        $this->conversionType = $conversionType;
    }

    /**
     * @return string
     */
    public function getAdapterSeries()
    {
        return $this->adapterSeries;
    }

    /**
     * @param string $adapterSeries
     */
    public function setAdapterSeries($adapterSeries)
    {
        $this->adapterSeries = $adapterSeries;
    }

    /**
     * @return string
     */
    public function getCenterGender()
    {
        return $this->centerGender;
    }

    /**
     * @param string $centerGender
     */
    public function setCenterGender($centerGender)
    {
        $this->centerGender = $centerGender;
    }

    /**
     * @return string
     */
    public function getConvertFromAdapterEnd()
    {
        return $this->convertFromAdapterEnd;
    }

    /**
     * @param string $convertFromAdapterEnd
     */
    public function setConvertFromAdapterEnd($convertFromAdapterEnd)
    {
        $this->convertFromAdapterEnd = $convertFromAdapterEnd;
    }

    /**
     * @return string
     */
    public function getConvertToAdapterEnd()
    {
        return $this->convertToAdapterEnd;
    }

    /**
     * @param string $convertToAdapterEnd
     */
    public function setConvertToAdapterEnd($convertToAdapterEnd)
    {
        $this->convertToAdapterEnd = $convertToAdapterEnd;
    }

    /**
     * @return string
     */
    public function getImpedance()
    {
        return $this->impedance;
    }

    /**
     * @param string $impedance
     */
    public function setImpedance($impedance)
    {
        $this->impedance = $impedance;
    }

    /**
     * @return string
     */
    public function getMountingType()
    {
        return $this->mountingType;
    }

    /**
     * @param string $mountingType
     */
    public function setMountingType($mountingType)
    {
        $this->mountingType = $mountingType;
    }

    /**
     * @return string
     */
    public function getMountingFeature()
    {
        return $this->mountingFeature;
    }

    /**
     * @param string $mountingFeature
     */
    public function setMountingFeature($mountingFeature)
    {
        $this->mountingFeature = $mountingFeature;
    }

    /**
     * @return string
     */
    public function getFasteningType()
    {
        return $this->fasteningType;
    }

    /**
     * @param string $fasteningType
     */
    public function setFasteningType($fasteningType)
    {
        $this->fasteningType = $fasteningType;
    }

    /**
     * @return string
     */
    public function getFrequencyMax()
    {
        return $this->frequencyMax;
    }

    /**
     * @param string $frequencyMax
     */
    public function setFrequencyMax($frequencyMax)
    {
        $this->frequencyMax = $frequencyMax;
    }

    /**
     * @return string
     */
    public function getIngressProtection()
    {
        return $this->ingressProtection;
    }

    /**
     * @param string $ingressProtection
     */
    public function setIngressProtection($ingressProtection)
    {
        $this->ingressProtection = $ingressProtection;
    }

    /**
     * @return string
     */
    public function getCenterContactPlating()
    {
        return $this->centerContactPlating;
    }

    /**
     * @param string $centerContactPlating
     */
    public function setCenterContactPlating($centerContactPlating)
    {
        $this->centerContactPlating = $centerContactPlating;
    }

    /**
     * @return string
     */
    public function getCableGroup()
    {
        return $this->cableGroup;
    }

    /**
     * @param string $cableGroup
     */
    public function setCableGroup($cableGroup)
    {
        $this->cableGroup = $cableGroup;
    }

    /**
     * @return string
     */
    public function getCenterConductorDiameter()
    {
        return $this->centerConductorDiameter;
    }

    /**
     * @param string $centerConductorDiameter
     */
    public function setCenterConductorDiameter($centerConductorDiameter)
    {
        $this->centerConductorDiameter = $centerConductorDiameter;
    }

    /**
     * @return string
     */
    public function getPinOrSocket()
    {
        return $this->pinOrSocket;
    }

    /**
     * @param string $pinOrSocket
     */
    public function setPinOrSocket($pinOrSocket)
    {
        $this->pinOrSocket = $pinOrSocket;
    }

    /**
     * @return string
     */
    public function getBoardThickness()
    {
        return $this->boardThickness;
    }

    /**
     * @param string $boardThickness
     */
    public function setBoardThickness($boardThickness)
    {
        $this->boardThickness = $boardThickness;
    }

    /**
     * @return string
     */
    public function getDisconnectType()
    {
        return $this->disconnectType;
    }

    /**
     * @param string $disconnectType
     */
    public function setDisconnectType($disconnectType)
    {
        $this->disconnectType = $disconnectType;
    }

    /**
     * @return string
     */
    public function getNumberOfLevels()
    {
        return $this->numberOfLevels;
    }

    /**
     * @param string $numberOfLevels
     */
    public function setNumberOfLevels($numberOfLevels)
    {
        $this->numberOfLevels = $numberOfLevels;
    }

    /**
     * @return string
     */
    public function getTerminalWidth()
    {
        return $this->terminalWidth;
    }

    /**
     * @param string $terminalWidth
     */
    public function setTerminalWidth($terminalWidth)
    {
        $this->terminalWidth = $terminalWidth;
    }

    /**
     * @return string
     */
    public function getTerminationStyle()
    {
        return $this->terminationStyle;
    }

    /**
     * @param string $terminationStyle
     */
    public function setTerminationStyle($terminationStyle)
    {
        $this->terminationStyle = $terminationStyle;
    }

    /**
     * @return string
     */
    public function getCurrentIEC()
    {
        return $this->currentIEC;
    }

    /**
     * @param string $currentIEC
     */
    public function setCurrentIEC($currentIEC)
    {
        $this->currentIEC = $currentIEC;
    }

    /**
     * @return string
     */
    public function getVoltageIEC()
    {
        return $this->voltageIEC;
    }

    /**
     * @param string $voltageIEC
     */
    public function setVoltageIEC($voltageIEC)
    {
        $this->voltageIEC = $voltageIEC;
    }

    /**
     * @return string
     */
    public function getCurrentUL()
    {
        return $this->currentUL;
    }

    /**
     * @param string $currentUL
     */
    public function setCurrentUL($currentUL)
    {
        $this->currentUL = $currentUL;
    }

    /**
     * @return string
     */
    public function getVoltageUL()
    {
        return $this->voltageUL;
    }

    /**
     * @param string $voltageUL
     */
    public function setVoltageUL($voltageUL)
    {
        $this->voltageUL = $voltageUL;
    }

    /**
     * @return string
     */
    public function getWireGaugeOrRangeAWGL()
    {
        return $this->wireGaugeOrRangeAWGL;
    }

    /**
     * @param string $wireGaugeOrRangeAWGL
     */
    public function setWireGaugeOrRangeAWGL($wireGaugeOrRangeAWGL)
    {
        $this->wireGaugeOrRangeAWGL = $wireGaugeOrRangeAWGL;
    }

    /**
     * @return string
     */
    public function getPositionsPerLevel()
    {
        return $this->positionsPerLevel;
    }

    /**
     * @param string $positionsPerLevel
     */
    public function setPositionsPerLevel($positionsPerLevel)
    {
        $this->positionsPerLevel = $positionsPerLevel;
    }

    /**
     * @return string
     */
    public function getHeaderOrientation()
    {
        return $this->headerOrientation;
    }

    /**
     * @param string $headerOrientation
     */
    public function setHeaderOrientation($headerOrientation)
    {
        $this->headerOrientation = $headerOrientation;
    }

    /**
     * @return string
     */
    public function getPlugWireEntry()
    {
        return $this->plugWireEntry;
    }

    /**
     * @param string $plugWireEntry
     */
    public function setPlugWireEntry($plugWireEntry)
    {
        $this->plugWireEntry = $plugWireEntry;
    }

    /**
     * @return string
     */
    public function getOperatingTemperature()
    {
        return $this->operatingTemperature;
    }

    /**
     * @param string $operatingTemperature
     */
    public function setOperatingTemperature($operatingTemperature)
    {
        $this->operatingTemperature = $operatingTemperature;
    }

    /**
     * @return string
     */
    public function getContactMatingFinish()
    {
        return $this->contactMatingFinish;
    }

    /**
     * @param string $contactMatingFinish
     */
    public function setContactMatingFinish($contactMatingFinish)
    {
        $this->contactMatingFinish = $contactMatingFinish;
    }

    /**
     * @return string
     */
    public function getProcessSideConnection()
    {
        return $this->processSideConnection;
    }

    /**
     * @param string $processSideConnection
     */
    public function setProcessSideConnection($processSideConnection)
    {
        $this->processSideConnection = $processSideConnection;
    }

    /**
     * @return string
     */
    public function getControlSideConnection()
    {
        return $this->controlSideConnection;
    }

    /**
     * @param string $controlSideConnection
     */
    public function setControlSideConnection($controlSideConnection)
    {
        $this->controlSideConnection = $controlSideConnection;
    }

    /**
     * @return string
     */
    public function getControlSideCableRetainer()
    {
        return $this->controlSideCableRetainer;
    }

    /**
     * @param string $controlSideCableRetainer
     */
    public function setControlSideCableRetainer($controlSideCableRetainer)
    {
        $this->controlSideCableRetainer = $controlSideCableRetainer;
    }

    /**
     * @return string
     */
    public function getPositionsPoles()
    {
        return $this->positionsPoles;
    }

    /**
     * @param string $positionsPoles
     */
    public function setPositionsPoles($positionsPoles)
    {
        $this->positionsPoles = $positionsPoles;
    }

    /**
     * @return string
     */
    public function getVoltageRated()
    {
        return $this->voltageRated;
    }

    /**
     * @param string $voltageRated
     */
    public function setVoltageRated($voltageRated)
    {
        $this->voltageRated = $voltageRated;
    }

    /**
     * @return string
     */
    public function getCurrentRatingPerContact()
    {
        return $this->currentRatingPerContact;
    }

    /**
     * @param string $currentRatingPerContact
     */
    public function setCurrentRatingPerContact($currentRatingPerContact)
    {
        $this->currentRatingPerContact = $currentRatingPerContact;
    }

    /**
     * @return string
     */
    public function getLength()
    {
        return $this->length;
    }

    /**
     * @param string $length
     */
    public function setLength($length)
    {
        $this->length = $length;
    }

    /**
     * @return string
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * @param string $width
     */
    public function setWidth($width)
    {
        $this->width = $width;
    }

    /**
     * @return string
     */
    public function getFrontPanelWireConnection()
    {
        return $this->frontPanelWireConnection;
    }

    /**
     * @param string $frontPanelWireConnection
     */
    public function setFrontPanelWireConnection($frontPanelWireConnection)
    {
        $this->frontPanelWireConnection = $frontPanelWireConnection;
    }

    /**
     * @return string
     */
    public function getRearPanelWireConnection()
    {
        return $this->rearPanelWireConnection;
    }

    /**
     * @param string $rearPanelWireConnection
     */
    public function setRearPanelWireConnection($rearPanelWireConnection)
    {
        $this->rearPanelWireConnection = $rearPanelWireConnection;
    }

    /**
     * @return string
     */
    public function getPanelThickness()
    {
        return $this->panelThickness;
    }

    /**
     * @param string $panelThickness
     */
    public function setPanelThickness($panelThickness)
    {
        $this->panelThickness = $panelThickness;
    }

    /**
     * @return string
     */
    public function getPanelMountType()
    {
        return $this->panelMountType;
    }

    /**
     * @param string $panelMountType
     */
    public function setPanelMountType($panelMountType)
    {
        $this->panelMountType = $panelMountType;
    }

    /**
     * @return string
     */
    public function getNumberOfPoles()
    {
        return $this->numberOfPoles;
    }

    /**
     * @param string $numberOfPoles
     */
    public function setNumberOfPoles($numberOfPoles)
    {
        $this->numberOfPoles = $numberOfPoles;
    }

    /**
     * @return string
     */
    public function getLineSideConnectionsPerPole()
    {
        return $this->lineSideConnectionsPerPole;
    }

    /**
     * @param string $lineSideConnectionsPerPole
     */
    public function setLineSideConnectionsPerPole($lineSideConnectionsPerPole)
    {
        $this->lineSideConnectionsPerPole = $lineSideConnectionsPerPole;
    }

    /**
     * @return string
     */
    public function getLoadSideConnectionsPerPole()
    {
        return $this->loadSideConnectionsPerPole;
    }

    /**
     * @param string $loadSideConnectionsPerPole
     */
    public function setLoadSideConnectionsPerPole($loadSideConnectionsPerPole)
    {
        $this->loadSideConnectionsPerPole = $loadSideConnectionsPerPole;
    }

    /**
     * @return string
     */
    public function getLineSideConnectionType()
    {
        return $this->lineSideConnectionType;
    }

    /**
     * @param string $lineSideConnectionType
     */
    public function setLineSideConnectionType($lineSideConnectionType)
    {
        $this->lineSideConnectionType = $lineSideConnectionType;
    }

    /**
     * @return string
     */
    public function getLoadSideConnectionType()
    {
        return $this->loadSideConnectionType;
    }

    /**
     * @param string $loadSideConnectionType
     */
    public function setLoadSideConnectionType($loadSideConnectionType)
    {
        $this->loadSideConnectionType = $loadSideConnectionType;
    }

    /**
     * @return string
     */
    public function getLineSideWireStudSize()
    {
        return $this->lineSideWireStudSize;
    }

    /**
     * @param string $lineSideWireStudSize
     */
    public function setLineSideWireStudSize($lineSideWireStudSize)
    {
        $this->lineSideWireStudSize = $lineSideWireStudSize;
    }

    /**
     * @return string
     */
    public function getLoadSideWireStudSize()
    {
        return $this->loadSideWireStudSize;
    }

    /**
     * @param string $loadSideWireStudSize
     */
    public function setLoadSideWireStudSize($loadSideWireStudSize)
    {
        $this->loadSideWireStudSize = $loadSideWireStudSize;
    }

    /**
     * @return string
     */
    public function getHousingColor()
    {
        return $this->housingColor;
    }

    /**
     * @param string $housingColor
     */
    public function setHousingColor($housingColor)
    {
        $this->housingColor = $housingColor;
    }

    /**
     * @return string
     */
    public function getMatingOrientation()
    {
        return $this->matingOrientation;
    }

    /**
     * @param string $matingOrientation
     */
    public function setMatingOrientation($matingOrientation)
    {
        $this->matingOrientation = $matingOrientation;
    }

    /**
     * @return string
     */
    public function getCurrent()
    {
        return $this->current;
    }

    /**
     * @param string $current
     */
    public function setCurrent($current)
    {
        $this->current = $current;
    }

    /**
     * @return string
     */
    public function getVoltage()
    {
        return $this->voltage;
    }

    /**
     * @param string $voltage
     */
    public function setVoltage($voltage)
    {
        $this->voltage = $voltage;
    }

    /**
     * @return string
     */
    public function getWireTermination()
    {
        return $this->wireTermination;
    }

    /**
     * @param string $wireTermination
     */
    public function setWireTermination($wireTermination)
    {
        $this->wireTermination = $wireTermination;
    }

    /**
     * @return string
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * @param string $gender
     */
    public function setGender($gender)
    {
        $this->gender = $gender;
    }

    /**
     * @return string
     */
    public function getStackingDirection()
    {
        return $this->stackingDirection;
    }

    /**
     * @param string $stackingDirection
     */
    public function setStackingDirection($stackingDirection)
    {
        $this->stackingDirection = $stackingDirection;
    }

    /**
     * @return string
     */
    public function getHeightStackingMating()
    {
        return $this->heightStackingMating;
    }

    /**
     * @param string $heightStackingMating
     */
    public function setHeightStackingMating($heightStackingMating)
    {
        $this->heightStackingMating = $heightStackingMating;
    }

    /**
     * @return string
     */
    public function getTailType()
    {
        return $this->tailType;
    }

    /**
     * @param string $tailType
     */
    public function setTailType($tailType)
    {
        $this->tailType = $tailType;
    }

    /**
     * @return string
     */
    public function getAcceptsPinDiameter()
    {
        return $this->acceptsPinDiameter;
    }

    /**
     * @param string $acceptsPinDiameter
     */
    public function setAcceptsPinDiameter($acceptsPinDiameter)
    {
        $this->acceptsPinDiameter = $acceptsPinDiameter;
    }

    /**
     * @return string
     */
    public function getMountingHoleDiameter()
    {
        return $this->mountingHoleDiameter;
    }

    /**
     * @param string $mountingHoleDiameter
     */
    public function setMountingHoleDiameter($mountingHoleDiameter)
    {
        $this->mountingHoleDiameter = $mountingHoleDiameter;
    }

    /**
     * @return string
     */
    public function getPinHoleDiameter()
    {
        return $this->pinHoleDiameter;
    }

    /**
     * @param string $pinHoleDiameter
     */
    public function setPinHoleDiameter($pinHoleDiameter)
    {
        $this->pinHoleDiameter = $pinHoleDiameter;
    }

    /**
     * @return string
     */
    public function getFlangeDiameter()
    {
        return $this->flangeDiameter;
    }

    /**
     * @param string $flangeDiameter
     */
    public function setFlangeDiameter($flangeDiameter)
    {
        $this->flangeDiameter = $flangeDiameter;
    }

    /**
     * @return string
     */
    public function getTailDiameter()
    {
        return $this->tailDiameter;
    }

    /**
     * @param string $tailDiameter
     */
    public function setTailDiameter($tailDiameter)
    {
        $this->tailDiameter = $tailDiameter;
    }

    /**
     * @return string
     */
    public function getSocketDepth()
    {
        return $this->socketDepth;
    }

    /**
     * @param string $socketDepth
     */
    public function setSocketDepth($socketDepth)
    {
        $this->socketDepth = $socketDepth;
    }


}