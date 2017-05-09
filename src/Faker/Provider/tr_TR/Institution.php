<?php
/**
 * Created by PhpStorm.
 * User: tayfun
 * Date: 05/05/2017
 * Time: 16:03
 */

namespace Biberltd\Faker\Provider\tr_TR;


class Institution extends \Biberltd\Faker\Provider\Institution
{
    protected static $universities = array(
        "İstanbul Üniversitesi", "Kemerburgaz Üniversitesi", "İstanbul Şişli Meslek Yüksekokulu", "Yıldız Teknik Üniversitesi"
    );

    protected static $applicationSuffix = array(
        "Web Uygulaması", "Mobil Uygulaması"
    );

    protected static $departments = array(
        "Bankacılık ve Sigortacılık", "Çocuk Gelişimi", "Moda Tasarımı", "Sağlık Yönetimi", "İlk ve Acil Yardım"
    );

    protected static $roomTypes = array(
        "office" => "Ofis",
        "class" => "Derslik",
        "amphi" => "Amfi",
        "lab" => "Laboratuar",
        "storage-room" => "Depo",
        "conference-room" => "Konferans Salonu",
        "sports-hall" => "Spor Salonu",
        "meeting-room" => "Toplantı Salonu",
        "security-room" => "Güvenlik Odası",
        "stage" => "Sahne"
    );

    protected static $staffTypes = array(
        "president" => "Rektör",
        "dean" => "Dekan",
        "administrative-staff" => "İdari Görevli",
        "academic-staff" => "Öğretim Üyesi",
        "research-staff" => "Araştırma Görevlisi",
        "security-staff" => "Güvenlik Görevlisi"
    );

    protected static $accountTypes = array(
        "support" => "Destek Hesabı",
        "saas-admin" => "SaaS Yönetim Hesabı",
        "saas-accounting" => "SaaS Muhasebe Hesabı",
        "saas-crm" => "SaaS CRM Hesabı",
        "student" => "Öğrenci Hesabı",
        "academic" => "Akademisyen Hesabı",
        "client" => "Kurum Yönetici Hesabı"
    );

    protected static $academicUnits = array(
        "faculty" => "Fakülte",
        "institute" => "Enstitü",
        "professional-school" => "Meslek Okulu",
        "college" => "Yüksekokul",
        "language-academy" => "Dil Okulu",
        "conservatory" => "Konservatuar",
        "summer-school" => "Yaz Okulu"
    );
}