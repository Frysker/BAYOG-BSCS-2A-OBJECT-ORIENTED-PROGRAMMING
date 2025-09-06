<?php

//ARKNIGHTS 

//PLAYER PROFILE
class Player {

    //PLAYER INFO
    public $player_name;
    public $player_id;
    public $player_level;
    public $player_date_joined;
    public $player_assistant;

    public function __construct($name, $id, $level, $date_joined, $assistant) 
    {
        echo "<br> Hello, Doctor! <br>";
        $this->player_name = $name;
        $this->player_id = $id;
        $this->player_level = $level;
        $this->player_date_joined = $date_joined;
        $this->player_assistant = $assistant;

        echo "Player Name: " . $this->player_name . "<br>";
        echo "Player ID: " . $this->player_id . "<br>";
        echo "Player Level: " . $this->player_level . "<br>";
        echo "Player Date Joined: " . $this->player_date_joined . "<br>";
        echo "Player Assistant: " . $this->player_assistant . "<br>";
    }

    //PLAYER ACTIVITY
    public function play(){
        echo "Playing Game . . .<br>";
    }

    public function change_support_unit(){
        echo "Changing Support Unit . . .<br>";
    }

    public function gacha_pull(){
        echo "Spending Orundum . . .<br>";
        echo "Performing Gacha Pull . . .<br>";
    }

    public function enter_base(){
        echo "Entering Base . . .<br>";
    }

    public function change_assistant(){
        echo "Changing Assistant . . .<br>";
    }
}

//NEW PLAYER
$Player1 = new Player("Frietz", "202002201020", 120, "2020-02-20", "Nian");
$Player1 -> play();
$Player1 -> change_support_unit();
$Player1 -> gacha_pull();
$Player1 -> enter_base();
$Player1 -> change_assistant();





//OPERATOR
class Operator {
    
    // OPERATOR INFO
    public $operator_name;
    public $operator_rarity;
    public $operator_class;
    public $operator_subclass;

    // OPERATOR ATTRIBUTES
    public $operator_hp;
    public $operator_attack;
    public $operator_defense;
    public $operator_arts_defense;
    public $operator_deployment_cost;
    public $operator_redeployment_time;
    public $operator_block_count;
    public $operator_attack_speed;

    public function __construct($name, $rarity, $class, $subclass, $hp, $attack, $defense, $arts_defense, $deployment_cost, $redeployment_time, $block_count, $attack_speed) 
    {
        echo "<br> A new operator object has been recruited!<br>";
        $this->operator_name = $name;
        $this->operator_rarity = $rarity;
        $this->operator_class = $class;
        $this->operator_subclass = $subclass;
        $this->operator_hp = $hp;
        $this->operator_attack = $attack;
        $this->operator_defense = $defense;
        $this->operator_arts_defense = $arts_defense;
        $this->operator_deployment_cost = $deployment_cost;
        $this->operator_redeployment_time = $redeployment_time;
        $this->operator_block_count = $block_count;
        $this->operator_attack_speed = $attack_speed;

        echo "Operator Name: " . $this->operator_name . "<br>";
        echo "Operator Rarity: " . $this->operator_rarity . "<br>";
        echo "Operator Class: " . $this->operator_class . "<br>";
        echo "Operator Subclass: " . $this->operator_subclass . "<br>";
        echo "Operator HP: " . $this->operator_hp . "<br>";
        echo "Operator Attack: " . $this->operator_attack . "<br>";
        echo "Operator Defense: " . $this->operator_defense . "<br>";
        echo "Operator Arts Defense: " . $this->operator_arts_defense . "<br>";
        echo "Operator Deployment Cost: " . $this->operator_deployment_cost . "<br>";
        echo "Operator Redeployment Time: " . $this->operator_redeployment_time . "<br>";
        echo "Operator Block Count: " . $this->operator_block_count . "<br>";
        echo "Operator Attack Speed: " . $this->operator_attack_speed . "<br>";
    }

    //OPERATOR ACTIVITY
    public function deploy(){
        echo "Deploying Operator . . .<br>";
    }

    public function retreat(){
        echo "Retreating Operator . . .<br>";
    }

    public function use_skill(){
        echo "Using Skill . . .<br>";
    }
}

//NEW OPERATOR
$Exusiai = new Operator("Exusiai", "SSR", "Sniper", "Marksman", 1863, 671, 161, 0, "Slow", 13, 1, "Fast");
$Exusiai -> deploy();
$Exusiai -> use_skill();
$Exusiai -> retreat();





class Boss {

    // BOSS INFO & ATTRIBUTES
    public $boss_name;
    public $boss_hp;
    public $boss_attack;
    public $boss_defense;
    public $boss_arts_defense;
    public $boss_movement_speed;
    public $boss_attack_speed;
    public $boss_elemental_resistance;
    public $boss_effect_resistance;

    public function __construct($name, $hp, $attack, $defense, $arts_defense, $movement_speed, $attack_speed, $elemental_resistance, $effect_resistance) 
    {
        echo "<br> A new boss has appeared!<br>";
        $this->boss_name = $name;
        $this->boss_hp = $hp;
        $this->boss_attack = $attack;
        $this->boss_defense = $defense;
        $this->boss_arts_defense = $arts_defense;
        $this->boss_movement_speed = $movement_speed;
        $this->boss_attack_speed = $attack_speed;
        $this->boss_elemental_resistance = $elemental_resistance;
        $this->boss_effect_resistance = $effect_resistance;

        echo "Boss Name: " . $this->boss_name . "<br>";
        echo "Boss HP: " . $this->boss_hp . "<br>";
        echo "Boss Attack: " . $this->boss_attack . "<br>";
        echo "Boss Defense: " . $this->boss_defense . "<br>";
        echo "Boss Arts Defense: " . $this->boss_arts_defense . "<br>";
        echo "Boss Movement Speed: " . $this->boss_movement_speed . "<br>";
        echo "Boss Attack Speed: " . $this->boss_attack_speed . "<br>";
        echo "Boss Elemental Resistance: " . $this->boss_elemental_resistance . "<br>";
        echo "Boss Effect Resistance: " . $this->boss_effect_resistance . "<br>";
    }


    // BOSS ACTIVITY
    public function attack(){
        echo "Boss Attacking . . .<br>";
    }

    public function use_ability(){
        echo "Boss Using Ability . . .<br>";
    }

    public function second_phase(){
        echo "Boss Entering Second Phase . . .<br>";
    } 
}

//NEW BOSS
$Patriot = new Boss("Patriot", "A+", "A+", "B", "B+", "D", "C", "E", "E");
$Patriot -> attack();
$Patriot -> use_ability();
$Patriot -> second_phase();





//FACILITY
class facility {

    // FACILITY INFO & ATTRIBUTES
    public $facility_type;
    public $facility_level;
    public $facility_production_type;
    public $facility_capacity;

    public function __construct($type, $level, $production_type, $capacity) 
    {
        echo "<br> Entering facility!<br>";
        $this->facility_type = $type;
        $this->facility_level = $level;
        $this->facility_production_type = $production_type;
        $this->facility_capacity = $capacity;

        echo "Facility Type: " . $this->facility_type . "<br>";
        echo "Facility Level: " . $this->facility_level . "<br>";
        echo "Facility Production Type: " . $this->facility_production_type . "<br>";
        echo "Facility Capacity: " . $this->facility_capacity . "<br>";
    }

    // FACILITY ACTIVITY

    public function produce(){
        echo "Producing Resources . . .<br>";
    }

    public function upgrade(){
        echo "Upgrading Facility . . .<br>";
    }
}

//NEW FACILITY
$Factory = new facility("Factory", 3, "Pure Gold", 90);
$Factory -> produce();
$Factory -> upgrade();

$Factory2 = new facility("Trading Post", 2, "LMD", 10);
$Factory2 -> produce();
$Factory2 -> upgrade();





//STORE
class Store{
    public $store_type;
    public $store_currency;

    public function __construct($type, $currency) 
    {
        echo "<br> Entering Store!<br>";
        $this->store_type = $type;
        $this->store_currency = $currency;

        echo "Store Type: " . $this->store_type . "<br>";
        echo "Store Currency: " . $this->store_currency . "<br>";
    }

    // STORE ACTIVITY
    public function browse(){
        echo "Browsing Store . . .<br>";
    }

    public function purchase(){
        echo "Purchasing Item . . .<br>";
    }
}

//NEW STORE
$Store1 = new Store("Furniture Store", "Furniture Parts");
$Store1 -> browse();
$Store1 -> purchase();

$Store2 = new Store("Outfit Store", "Originite Prime");
$Store2 -> browse();
$Store2 -> purchase();
?>
