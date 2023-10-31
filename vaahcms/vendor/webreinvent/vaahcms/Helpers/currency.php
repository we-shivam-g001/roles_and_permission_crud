<?php


//---------------------------------------------------
function vh_get_currency_list()
{
    $list = array (
        ['slug'=>'GBP','name'=>'United Kingdom Pound'],
        ['slug'=>        'USD','name'=>'United States Dollar'],
        ['slug'=>        'INR','name'=>'India Rupee'],
        ['slug'=>        'ALL','name'=>'Albania Lek'],
        ['slug'=>        'AFN','name'=>'Afghanistan Afghani'],
        ['slug'=>        'ARS','name'=>'Argentina Peso'],
        ['slug'=>        'AWG','name'=>'Aruba Guilder'],
        ['slug'=>        'AUD','name'=>'Australia Dollar'],
        ['slug'=>        'AZN','name'=>'Azerbaijan New Manat'],
        ['slug'=>        'BSD','name'=>'Bahamas Dollar'],
        ['slug'=>        'BBD','name'=>'Barbados Dollar'],
        ['slug'=>        'BDT','name'=>'Bangladeshi taka'],
        ['slug'=>        'BYR','name'=>'Belarus Ruble'],
        ['slug'=>        'BZD','name'=>'Belize Dollar'],
        ['slug'=>        'BMD','name'=>'Bermuda Dollar'],
        ['slug'=>        'BOB','name'=>'Bolivia Boliviano'],
        ['slug'=>        'BAM','name'=>'Bosnia and Herzegovina Convertible Marka'],
        ['slug'=>        'BWP','name'=>'Botswana Pula'],
        ['slug'=>        'BGN','name'=>'Bulgaria Lev'],
        ['slug'=>        'BRL','name'=>'Brazil Real'],
        ['slug'=>        'BND','name'=>'Brunei Darussalam Dollar'],
        ['slug'=>        'KHR','name'=>'Cambodia Riel'],
        ['slug'=>        'CAD','name'=>'Canada Dollar'],
        ['slug'=>        'KYD','name'=>'Cayman Islands Dollar'],
        ['slug'=>        'CLP','name'=>'Chile Peso'],
        ['slug'=>        'CNY','name'=>'China Yuan Renminbi'],
        ['slug'=>        'COP','name'=>'Colombia Peso'],
        ['slug'=>        'CRC','name'=>'Costa Rica Colon'],
        ['slug'=>        'HRK','name'=>'Croatia Kuna'],
        ['slug'=>        'CUP','name'=>'Cuba Peso'],
        ['slug'=>        'CZK','name'=>'Czech Republic Koruna'],
        ['slug'=>        'DKK','name'=>'Denmark Krone'],
        ['slug'=>        'DOP','name'=>'Dominican Republic Peso'],
        ['slug'=>        'XCD','name'=>'East Caribbean Dollar'],
        ['slug'=>        'EGP','name'=>'Egypt Pound'],
        ['slug'=>        'SVC','name'=>'El Salvador Colon'],
        ['slug'=>        'EEK','name'=>'Estonia Kroon'],
        ['slug'=>        'EUR','name'=>'Euro Member Countries'],
        ['slug'=>        'FKP','name'=>'Falkland Islands (Malvinas) Pound'],
        ['slug'=>        'FJD','name'=>'Fiji Dollar'],
        ['slug'=>        'GHC','name'=>'Ghana Cedis'],
        ['slug'=>        'GIP','name'=>'Gibraltar Pound'],
        ['slug'=>        'GTQ','name'=>'Guatemala Quetzal'],
        ['slug'=>        'GGP','name'=>'Guernsey Pound'],
        ['slug'=>        'GYD','name'=>'Guyana Dollar'],
        ['slug'=>        'HNL','name'=>'Honduras Lempira'],
        ['slug'=>        'HKD','name'=>'Hong Kong Dollar'],
        ['slug'=>        'HUF','name'=>'Hungary Forint'],
        ['slug'=>        'ISK','name'=>'Iceland Krona'],
        ['slug'=>        'IDR','name'=>'Indonesia Rupiah'],
        ['slug'=>        'IRR','name'=>'Iran Rial'],
        ['slug'=>        'IMP','name'=>'Isle of Man Pound'],
        ['slug'=>        'ILS','name'=>'Israel Shekel'],
        ['slug'=>        'JMD','name'=>'Jamaica Dollar'],
        ['slug'=>        'JPY','name'=>'Japan Yen'],
        ['slug'=>        'JEP','name'=>'Jersey Pound'],
        ['slug'=>        'KZT','name'=>'Kazakhstan Tenge'],
        ['slug'=>        'KPW','name'=>'Korea (North) Won'],
        ['slug'=>        'KRW','name'=>'Korea (South) Won'],
        ['slug'=>        'KGS','name'=>'Kyrgyzstan Som'],
        ['slug'=>        'LAK','name'=>'Laos Kip'],
        ['slug'=>        'LVL','name'=>'Latvia Lat'],
        ['slug'=>        'LBP','name'=>'Lebanon Pound'],
        ['slug'=>        'LRD','name'=>'Liberia Dollar'],
        ['slug'=>        'LTL','name'=>'Lithuania Litas'],
        ['slug'=>        'MKD','name'=>'Macedonia Denar'],
        ['slug'=>        'MYR','name'=>'Malaysia Ringgit'],
        ['slug'=>        'MUR','name'=>'Mauritius Rupee'],
        ['slug'=>        'MXN','name'=>'Mexico Peso'],
        ['slug'=>        'MNT','name'=>'Mongolia Tughrik'],
        ['slug'=>        'MZN','name'=>'Mozambique Metical'],
        ['slug'=>        'NAD','name'=>'Namibia Dollar'],
        ['slug'=>        'NPR','name'=>'Nepal Rupee'],
        ['slug'=>        'ANG','name'=>'Netherlands Antilles Guilder'],
        ['slug'=>        'NZD','name'=>'New Zealand Dollar'],
        ['slug'=>        'NIO','name'=>'Nicaragua Cordoba'],
        ['slug'=>        'NGN','name'=>'Nigeria Naira'],
        ['slug'=>        'NOK','name'=>'Norway Krone'],
        ['slug'=>        'OMR','name'=>'Oman Rial'],
        ['slug'=>        'PKR','name'=>'Pakistan Rupee'],
        ['slug'=>        'PAB','name'=>'Panama Balboa'],
        ['slug'=>        'PYG','name'=>'Paraguay Guarani'],
        ['slug'=>        'PEN','name'=>'Peru Nuevo Sol'],
        ['slug'=>        'PHP','name'=>'Philippines Peso'],
        ['slug'=>        'PLN','name'=>'Poland Zloty'],
        ['slug'=>        'QAR','name'=>'Qatar Riyal'],
        ['slug'=>        'RON','name'=>'Romania New Leu'],
        ['slug'=>        'RUB','name'=>'Russia Ruble'],
        ['slug'=>        'SHP','name'=>'Saint Helena Pound'],
        ['slug'=>        'SAR','name'=>'Saudi Arabia Riyal'],
        ['slug'=>        'RSD','name'=>'Serbia Dinar'],
        ['slug'=>        'SCR','name'=>'Seychelles Rupee'],
        ['slug'=>        'SGD','name'=>'Singapore Dollar'],
        ['slug'=>        'SBD','name'=>'Solomon Islands Dollar'],
        ['slug'=>        'SOS','name'=>'Somalia Shilling'],
        ['slug'=>        'ZAR','name'=>'South Africa Rand'],
        ['slug'=>        'LKR','name'=>'Sri Lanka Rupee'],
        ['slug'=>        'SEK','name'=>'Sweden Krona'],
        ['slug'=>        'CHF','name'=>'Switzerland Franc'],
        ['slug'=>        'SRD','name'=>'Suriname Dollar'],
        ['slug'=>        'SYP','name'=>'Syria Pound'],
        ['slug'=>        'TWD','name'=>'Taiwan New Dollar'],
        ['slug'=>        'THB','name'=>'Thailand Baht'],
        ['slug'=>        'TTD','name'=>'Trinidad and Tobago Dollar'],
        ['slug'=>        'TRY','name'=>'Turkey Lira'],
        ['slug'=>        'TRL','name'=>'Turkey Lira'],
        ['slug'=>        'TVD','name'=>'Tuvalu Dollar'],
        ['slug'=>        'UAH','name'=>'Ukraine Hryvna'],
        ['slug'=>        'UYU','name'=>'Uruguay Peso'],
        ['slug'=>        'UZS','name'=>'Uzbekistan Som'],
        ['slug'=>        'VEF','name'=>'Venezuela Bolivar'],
        ['slug'=>        'VND','name'=>'Viet Nam Dong'],
        ['slug'=>        'YER','name'=>'Yemen Rial'],
        ['slug'=>        'ZWD','name'=>'Zimbabwe Dollar'],

    );

    return $list;
}
//---------------------------------------------------

//---------------------------------------------------
