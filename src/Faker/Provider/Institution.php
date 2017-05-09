<?php
/**
 * Created by PhpStorm.
 * User: tayfun
 * Date: 05/05/2017
 * Time: 15:58
 */

namespace Biberltd\Faker\Provider;


class Institution extends Base
{
    public static $languages = array(
        "tr", "en", "de", "ru"
    );


    protected static $courseCodeNumbers = array(
        "1001", "1002", "2001", "2002", "3001", "3002", "4001", "4002"
    );

    protected static $universities = array();
    protected static $applicationSuffix = array();
    protected static $departments = array();
    protected static $roomTypes = array();
    protected static $staffTypes = array();
    protected static $accountTypes = array();
    protected static $academicUnits = array();

    public function university()
    {
        return static::randomElement(static::$universities);
    }

    public function applicationSuffix()
    {
        return static::randomElement(static::$applicationSuffix);
    }

    public function applicationName()
    {
        return static::university()." ".static::applicationSuffix();
    }

    public function department()
    {
        return static::randomElement(static::$departments);
    }

    public function roomType()
    {
        return static::randomElement(static::$roomTypes);
    }

    public function roomTypeSlug()
    {
        return static::randomKey(static::$roomTypes);
    }

    public function staffType()
    {
        return static::randomElement(static::$staffTypes);
    }

    public function staffTypeSlug()
    {
        return static::randomKey(static::$staffTypes);
    }

    public function accountType()
    {
        return static::randomElement(static::$accountTypes);
    }

    public function accountTypeKey()
    {
        return static::randomKey(static::$accountTypes);
    }

    public function academicUnit()
    {
        return static::randomElement(static::$academicUnits);
    }

    public function academicUnitKey()
    {
        return static::randomKey(static::$academicUnits);
    }

    public function randomLanguage($count = 1, $isArray = FALSE)
    {
        $result = NULL;
        if ($isArray && $isArray == TRUE) {
            $result = array();
            for($i=0; $i<$count; $i++) {
                $result[] = static::randomElement(static::$languages);
            }

            return $result;
        }

        return static::randomElement(static::$languages);
    }

    public function courseCode() {
        $letters = array();
        for ($i=0; $i<3; $i++) {
            $letters[] = mb_strtoupper(static::randomLetter());
        }

        return implode("", $letters)."".static::randomElement(static::$courseCodeNumbers);
    }




}