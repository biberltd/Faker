<?php

namespace Biberltd\Faker\Provider\tr_TR;

class Address extends \Biberltd\Faker\Provider\Address
{
    protected static $buildingNumber = array('###', '##', '#');

    protected static $streetSuffix = array(
        'Sokak', 'Caddesi', 'Kavşağı', 'Durağı', 'İş Hanı', 'Mevkii'
    );

    protected static $postcode = array('#####');

    /**
    * @var array Cities of Turkey, for future updates please use @link https://tr.wikipedia.org/wiki/T%C3%BCrkiye'nin_illeri
    */
    protected static $cityNames = array(
        'Adana','Adıyaman','Afyonkarahisar','Ağrı','Aksaray','Amasya','Ankara','Antalya','Ardahan','Artvin','Aydın',
        'Balıkesir','Bartın','Batman','Bayburt','Bilecik','Bingöl','Bitlis','Bolu','Burdur','Bursa',
        'Çanakkale','Çankırı','Çorum',
        'Denizli','Diyarbakır','Düzce',
        'Edirne','Elazığ','Erzincan','Erzurum','Eskişehir',
        'Gaziantep','Giresun','Gümüşhane',
        'Hakkari','Hatay',
        'Iğdır','Isparta','İstanbul','İzmir',
        'Kahramanmaraş','Karabük','Karaman','Kars','Kastamonu','Kayseri','Kilis',
        'Kırıkkale','Kırklareli','Kırşehir','Kocaeli','Konya','Kütahya',
        'Malatya','Manisa','Mardin','Mersin','Muğla','Muş',
        'Nevşehir','Niğde',
        'Ordu','Osmaniye',
        'Rize',
        'Sakarya','Samsun','Şanlıurfa','Siirt','Sinop','Şırnak','Sivas',
        'Tekirdağ','Tokat','Trabzon','Tunceli',
        'Uşak',
        'Van',
        'Yalova','Yozgat',
        'Zonguldak'
    );

    /**
    * @var array Countries in Turkish
    * @link https://tr.wikipedia.org/wiki/%C3%9Clkeler_listesi
    */
    protected static $country = array(
        'Almanya','Amerika Birleşik Devletleri','Arjantin','Arnavutluk','Avustralya','Avusturya','Azerbaycan',
        'Bahreyn','Belçika','Beyaz Rusya','Birleşik Arap Emirlikleri','Bosna-hersek','Brezilya','Bulgaristan',
        'Çek Cumhuriyeti','Cezayir','Çin Halk Cumhuriyeti',
        'Danimarka','Dominik Cumhuriyeti',
        'Endonezya','Ermenistan','Estonya',
        'Fas','Filipinler','Filistin','Finlandiya','Fransa',
        'Güney Afrika Cumhuriyeti','Güney Kore','Gürcistan',
        'Hindistan','Hırvatistan','Hollanda',
        'İngiltere','Irak','İran','İrlanda','İskoçya','İspanya','İsrail','İsveç','İsviçre','İtalya',
        'Jamaika','Japonya',
        'Kamboçya','Kanada','Karadağ','Kazakistan','Kıbrıs','Kırgızistan','Kosta Rika','Küba','Kuzey Kore',
        'Letonya','Libya','Litvanya','Lübnan','Lüksemburg',
        'Macaristan','Makedonya','Maldivler','Malta','Maurıtıus','Mısır',
        'Nepal',
        'Özbekistan',
        'Pakistan','Polonya','Portekiz','Romanya',
        'Rusya',
        'Sırbistan','Slovakya','Slovenya',
        'Sri Lanka','Sudan','Suriye','Suudi Arabistan',
        'Tacikistan','Tayland','Tayvan','Tunus','Türkiye',
        'Ukrayna','Umman','Ürdün',
        'Venezuela','Vietnam',
        'Yemen','Yeni Zelanda','Yeşil Burun','Yunanistan',
        'Zambiya','Zimbabve'
    );

    protected static $counties = array(
        "Esenyurt", "Küçükçekmece", "Bağcılar", "Ümraniye", "Pendik", "Bahçelievler", "Üsküdar", "Sultangazi", "Gaziosmanpaşa",
        "Maltepe", "Kartal", "Esenler", "Kadıköy", "Kağıthane", "Avcılar", "Ataşehir", "Fatih", "Eyüp", "Sancaktepe", "Başakşehir",
        "Sultanbeyli", "Güngören", "Beylikdüzü", "Zeytinburnu", "Bayrampaşa", "Şişli", "Beykoz", "Arnavutköy", "Tuzla", "Çekmeköy",
        "Beyoğlu", "Büyükçekmece", "Bakırköy", "Beşiktaş", "Silivri", "Çatalca", "Şile", "Adalar"
    );

    protected static $cityFormats = array(
        '{{cityName}}',
    );

    protected static $streetNameFormats = array(
        '{{lastName}} {{streetSuffix}}',
        '{{firstName}} {{streetSuffix}}',
        '{{firstName}} {{streetSuffix}}'
    );

    protected static $streetAddressFormats = array(
        '{{streetName}} {{buildingNumber}}',
    );
    protected static $addressFormats = array(
        "{{streetAddress}}\n{{postcode}} {{city}}",
    );

    protected static $districts = [
        'Alabama','Alaska','Arizona','Arkansas','California','Colorado','Connecticut','Delaware','Florida','Georgia','Hawaii','Idaho','Illinois','Indiana','Iowa','Kansas','Kentucky[D]','Louisiana','Maine','Maryland','Massachusetts[E]','Michigan','Minnesota','Mississippi','Missouri','Montana','Nebraska','Nevada','New Hampshire','New Jersey','New Mexico','New York','North Carolina','North Dakota','Ohio','Oklahoma','Oregon','Pennsylvania[F]','Rhode Island[G]','South Carolina','South Dakota','Tennessee','Texas','Utah','Vermont','Virginia[H]','Washington','West Virginia','Wisconsin','Wyoming'
    ];

    public function cityName()
    {
        return static::randomElement(static::$cityNames);
    }

    public function district()
    {
        return static::randomElement(static::$districts);
    }

    public function addresses($count = 2)
    {
        $result = array();
        for ($i=0; $i<$count; $i++) {
            $result[] = static::address();
        }

        return $result;
    }

    public function county()
    {
        return static::randomElement(static::$counties);
    }

    public function counties($count = 1)
    {
        $result = array();
        for ($i=0; $i<$count; $i++) {
            $result[] = static::county();
        }

        return $result;
    }
}
