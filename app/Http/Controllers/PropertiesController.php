<?php

namespace App\Http\Controllers;

use App\Models\Agent;
use App\Models\City;
use App\Models\Country;
use App\Models\Property;
use App\Models\PropertyAddress;
use App\Models\PropertyAgent;
use App\Models\PropertyContact;
use App\Models\PropertyImages;
use App\Models\PropertyPrice;
use App\Models\State;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PropertiesController extends Controller
{
    public function index(Request $request)
    {
        // dd($request->itemsOrderBy);
        if($request->has('location') || $request->has('city') || $request->has('propertyType') || $request->has('minPrice') || $request->has('maxPrice') || $request->has('keyword') || $request->has('rentalType') || $request->has('numOfBedroom') || $request->has('numOfBathroom') || $request->has('numOfDiningRoom') || $request->has('itemsPerPage') || $request->has('itemsOrderBy') ){
            $location = $request['location'];
            $city = $request['city'];
            $propertyType = $request['propertyType'];
            $minPrice = $request['minPrice'];
            $maxPrice = $request['maxPrice'];
            $keyword = $request['keyword'];
            $rentalType = $request['rentalType'];
            $bedrooms = $request['numOfBedroom'];
            $bathrooms = $request['numOfBathroom'];
            $diningRooms = $request['numOfDiningRoom'];
            $itemPerPage = $request['itemsPerPage'];
            $itemOrderBy = $request['itemsOrderBy'];
            
            $properties = Property::where(function($query) use($location, $city, $propertyType, $minPrice, $maxPrice, $keyword, $rentalType, $bedrooms, $bathrooms, $diningRooms)
            {
                if($location) {
                    $query->orwhere('country','LIKE', "%{$location}%")->orwhere('city','LIKE',"%{$location}%");
                }
                if($city) {
                    $query->where('city','LIKE',"%{$city}%");
                }
                if($propertyType) {
                    $query->where('propertyType','LIKE',"%{$propertyType}%");
                }
                if($minPrice) {
                    $query->whereBetween('price',[$minPrice, $maxPrice]);
                }
                if($keyword) {
                    $query->where('propertyName','LIKE',"%{$keyword}%");
                }
                if($rentalType) {
                    $query->where('rentalType','LIKE',"%{$rentalType}%");
                }
                if($bedrooms) {
                    $query->where('bedrooms','LIKE',"%{$bedrooms}%");
                }
                if($bathrooms) {
                    $query->where('bathrooms','LIKE',"%{$bathrooms}%");
                }
                if($diningRooms) {
                    $query->where('diningRooms','LIKE',"%{$diningRooms}%");
                }
            })->orderBy('price','asc')->paginate($itemPerPage);
        }else{
            $properties = Property::latest()->paginate(6);
        }
        $featuredProperties = Property::where('feature','Like', 1)->get();
        $countries = Country::orderBy('contry_name', 'ASC')->select('contry_name')->distinct()->get();
        $cities = City::orderBy('city_name', 'ASC')->select('city_name')->distinct()->get();
        return view('property-listing',compact('properties','countries','cities', 'featuredProperties'));

    }

    public function store(Request $request)
    {
        $loginResponse = Http::withHeaders([
            'Content-Type' => 'application/json'
        ])->post('https://eu11-dev.propertyraptor.com/hornet/client/login', [
            'username'=>'eu11_001_dev@pr.com',
            'password'=>'tVh6Y2jK'
        ]);
        $getLoginToken = $loginResponse->json();
        $token = $getLoginToken['data']['token'];
        $response = Http::withHeaders([
            'Content-Type' => 'application/json',
            'token' => $token,
        ])->post('https://eu11-dev.propertyraptor.com/hornet/external/portal/queryProperties', [
            'companyId'=> 'eu11_001',
        ]);
        $jsonData = $response->json();
        
        if ($jsonData['data'] != null) {
            foreach ($jsonData['data']['content'] as $value) {
                $singleProperty = Http::withHeaders([
                    'Content-Type' => 'application/json',
                    'token' => $token,
                ])->post('https://eu11-dev.propertyraptor.com/hornet/external/portal/queryPropertyDetails', [
                    "sfid"=> $value['sfid'],
                    "currency"=> "GBP",
                    "measureUnit"=> "Square Foot"
                ]);
                $getSingleProperty = $singleProperty->json();
                if ($getSingleProperty['data'] != null) {
                    $checkSfid = Property::where('sfid', 'Like', $getSingleProperty['data']['sfid'])->get();
                    if (count($checkSfid) > 0) {
                        $property = Property::where('sfid',$getSingleProperty['data']['sfid'])->update([
                            "region" => $getSingleProperty['data']['region'],
                            "country" => $getSingleProperty['data']['country'],
                            "city" => $getSingleProperty['data']['city'],
                            "areaLocationTitle" => $getSingleProperty['data']['areaLocationTitle'],
                            "areaLocationDescription" => $getSingleProperty['data']['areaLocationDescription'],
                            "locationMapLat" => $getSingleProperty['data']['locationMapLat'],
                            "locationMapLon" => $getSingleProperty['data']['locationMapLon'],
                            "propertyLat" => $getSingleProperty['data']['propertyLat'],
                            "propertyLon" => $getSingleProperty['data']['propertyLon'],
                            "propertyType" => $getSingleProperty['data']['propertyType'],
                            "featured" => $getSingleProperty['data']['featured'],
                            "saleRentType" => $getSingleProperty['data']['saleRentType'],
                            "type" => $getSingleProperty['data']['type'],
                            "rentalType" => $getSingleProperty['data']['rentalType'],
                            "bedrooms" => $getSingleProperty['data']['bedrooms'],
                            "bathrooms" => $getSingleProperty['data']['bathrooms'],
                            "diningRooms" => $getSingleProperty['data']['diningRooms'],
                            "livingRooms" => $getSingleProperty['data']['livingRooms'],
                            "unit" => $getSingleProperty['data']['unit'],
                            "unitStreetName" => $getSingleProperty['data']['unitStreetName'],
                            "price" => $getSingleProperty['data']['price'],
                            "currency" => $getSingleProperty['data']['currency'],
                            "askingPriceFlag" => $getSingleProperty['data']['askingPriceFlag'],
                            "dateTimeAdded" => $getSingleProperty['data']['dateTimeAdded'],
                            "uniqueIdentifier" => $getSingleProperty['data']['uniqueIdentifier'],
                            "propertyName" => $getSingleProperty['data']['propertyName'],
                            "shortDescription" => $getSingleProperty['data']['shortDescription'],
                            "longDescription" => $getSingleProperty['data']['longDescription'],
                            "images" => $getSingleProperty['data']['images'] ? implode(',', $getSingleProperty['data']['images']) : "null",
                            "coveredArea" => $getSingleProperty['data']['coveredArea'],
                            "measureUnit" => $getSingleProperty['data']['measureUnit'],
                            "lifeStyle" => $getSingleProperty['data']['lifeStyle'],
                            "amenities" => $getSingleProperty['data']['amenities'],
                        ]);
                        if (isset($getSingleProperty['data']['dataSource'])) {
                            if (isset($getSingleProperty['data']['dataSource']['img'])) {
                                if (isset($getSingleProperty['data']['dataSource']['img']['images_img'])) {
                                    $images = [];
                                    foreach ($getSingleProperty['data']['dataSource']['img']['images_img'] as $getMulImg) {
                                        array_push($images, $getMulImg['media_url']);
                                    }
                                    $propImgCheck = PropertyImages::where('images_property_sfid', 'Like', $getSingleProperty['data']['sfid'])->get();
                                    if (count($propImgCheck) > 0) {
                                        $property = PropertyImages::where('images_property_sfid',$getSingleProperty['data']['sfid'])->update([
                                            'images_leadImage' => $getSingleProperty['data']['dataSource']['img']['leadImage']['media_url'],
                                            'images_img' => json_encode($images),
                                        ]);
                                    }else{
                                        $propertyImage = PropertyImages::create([
                                            'images_property_sfid'=> $getSingleProperty['data']['sfid'],
                                            'images_leadImage' => $getSingleProperty['data']['dataSource']['img']['leadImage']['media_url'],
                                            'images_img' => json_encode($images),
                                        ]);
                                    }
                                }
                            }

                            if (isset($getSingleProperty['data']['dataSource']['address'])) {
                                $propAddCheck = PropertyAddress::where('address_property_sfid', 'Like', $getSingleProperty['data']['sfid'])->get();
                                if (count($propAddCheck) > 0) {
                                    $propertyAddress = PropertyAddress::where('address_property_sfid',$getSingleProperty['data']['sfid'])->update([
                                        'address_country'=> $getSingleProperty['data']['dataSource']['address']['country'],
                                        'address_lng'=> $getSingleProperty['data']['dataSource']['address']['lng'],
                                        'address_town'=> $getSingleProperty['data']['dataSource']['address']['town'],
                                        'address_city'=> $getSingleProperty['data']['dataSource']['address']['city'],
                                        'address_countrycode'=> $getSingleProperty['data']['dataSource']['address']['countrycode'],
                                        'address_county'=> $getSingleProperty['data']['dataSource']['address']['county'],
                                        'address_sectorName'=> $getSingleProperty['data']['dataSource']['address']['sectorName'],
                                        'address_cTaxYear'=> $getSingleProperty['data']['dataSource']['address']['cTaxYear'],
                                        'address_os_town_city'=> $getSingleProperty['data']['dataSource']['address']['os_town_city'],
                                        'address_propertyReference'=> $getSingleProperty['data']['dataSource']['address']['propertyReference'],
                                        'address_council'=> $getSingleProperty['data']['dataSource']['address']['council'],
                                        'address_displayAddress'=> $getSingleProperty['data']['dataSource']['address']['displayAddress'],
                                        'address_street'=> $getSingleProperty['data']['dataSource']['address']['street'],
                                        'address_outcode'=> $getSingleProperty['data']['dataSource']['address']['outcode'],
                                        'address_cTaxPrice'=> $getSingleProperty['data']['dataSource']['address']['cTaxPrice'],
                                        'address_full_postcode'=> $getSingleProperty['data']['dataSource']['address']['full_postcode'],
                                        'address_state'=> $getSingleProperty['data']['dataSource']['address']['state'],
                                        'address_outcodeName'=> $getSingleProperty['data']['dataSource']['address']['outcodeName'],
                                        'address_village'=> $getSingleProperty['data']['dataSource']['address']['village'],
                                        'address_cTaxBand'=> $getSingleProperty['data']['dataSource']['address']['cTaxBand'],
                                        'address_sector'=> $getSingleProperty['data']['dataSource']['address']['sector'],
                                        'address_lat'=> $getSingleProperty['data']['dataSource']['address']['lat']
                                    ]);
                                }else{
                                    $propertyAddress = PropertyAddress::create([
                                        'address_property_sfid'=> $getSingleProperty['data']['sfid'],
                                        'address_country'=> $getSingleProperty['data']['dataSource']['address']['country'],
                                        'address_lng'=> $getSingleProperty['data']['dataSource']['address']['lng'],
                                        'address_town'=> $getSingleProperty['data']['dataSource']['address']['town'],
                                        'address_city'=> $getSingleProperty['data']['dataSource']['address']['city'],
                                        'address_countrycode'=> $getSingleProperty['data']['dataSource']['address']['countrycode'],
                                        'address_county'=> $getSingleProperty['data']['dataSource']['address']['county'],
                                        'address_sectorName'=> $getSingleProperty['data']['dataSource']['address']['sectorName'],
                                        'address_cTaxYear'=> $getSingleProperty['data']['dataSource']['address']['cTaxYear'],
                                        'address_os_town_city'=> $getSingleProperty['data']['dataSource']['address']['os_town_city'],
                                        'address_propertyReference'=> $getSingleProperty['data']['dataSource']['address']['propertyReference'],
                                        'address_council'=> $getSingleProperty['data']['dataSource']['address']['council'],
                                        'address_displayAddress'=> $getSingleProperty['data']['dataSource']['address']['displayAddress'],
                                        'address_street'=> $getSingleProperty['data']['dataSource']['address']['street'],
                                        'address_outcode'=> $getSingleProperty['data']['dataSource']['address']['outcode'],
                                        'address_cTaxPrice'=> $getSingleProperty['data']['dataSource']['address']['cTaxPrice'],
                                        'address_full_postcode'=> $getSingleProperty['data']['dataSource']['address']['full_postcode'],
                                        'address_state'=> $getSingleProperty['data']['dataSource']['address']['state'],
                                        'address_outcodeName'=> $getSingleProperty['data']['dataSource']['address']['outcodeName'],
                                        'address_village'=> $getSingleProperty['data']['dataSource']['address']['village'],
                                        'address_cTaxBand'=> $getSingleProperty['data']['dataSource']['address']['cTaxBand'],
                                        'address_sector'=> $getSingleProperty['data']['dataSource']['address']['sector'],
                                        'address_lat'=> $getSingleProperty['data']['dataSource']['address']['lat']
                                    ]);
                                }
                            }

                            if (isset($getSingleProperty['data']['dataSource']['price'])) {
                                $propPriceCheck = PropertyPrice::where('price_property_sfid', 'Like', $getSingleProperty['data']['sfid'])->get();
                                if (count($propPriceCheck) > 0) {
                                    $property = PropertyPrice::where('price_property_sfid',$getSingleProperty['data']['sfid'])->update([
                                        'price_property_price'=> $getSingleProperty['data']['dataSource']['price']['property_price'],
                                        'price_property_price_gbp'=> $getSingleProperty['data']['dataSource']['price']['property_price_gbp'] ,
                                        'price_property_currency_symbol'=> $getSingleProperty['data']['dataSource']['price']['property_currency_symbol'] ,
                                        'price_displaySoldDetails'=> $getSingleProperty['data']['dataSource']['price']['displaySoldDetails'] ,
                                        'price_sale_price_gbp'=> $getSingleProperty['data']['dataSource']['price']['sale_price_gbp'] ,
                                        'price_displayPrice'=> $getSingleProperty['data']['dataSource']['price']['displayPrice'] ,
                                        'price_displayQualifier'=> $getSingleProperty['data']['dataSource']['price']['displayQualifier'] ,
                                        'price_currency'=> $getSingleProperty['data']['dataSource']['price']['currency'] ,
                                        'price_property_currency'=> $getSingleProperty['data']['dataSource']['price']['property_currency'] ,
                                        'price_sale_price'=> $getSingleProperty['data']['dataSource']['price']['sale_price'] ,
                                        'price_trxDate'=> $getSingleProperty['data']['dataSource']['price']['trxDate'] ,
                                    ]);
                                }else{
                                    $propertyAddress = PropertyPrice::create([
                                        'price_property_sfid'=> $getSingleProperty['data']['sfid'],
                                        'price_property_price'=> $getSingleProperty['data']['dataSource']['price']['property_price'],
                                        'price_property_price_gbp'=> $getSingleProperty['data']['dataSource']['price']['property_price_gbp'] ,
                                        'price_property_currency_symbol'=> $getSingleProperty['data']['dataSource']['price']['property_currency_symbol'] ,
                                        'price_displaySoldDetails'=> $getSingleProperty['data']['dataSource']['price']['displaySoldDetails'] ,
                                        'price_sale_price_gbp'=> $getSingleProperty['data']['dataSource']['price']['sale_price_gbp'] ,
                                        'price_displayPrice'=> $getSingleProperty['data']['dataSource']['price']['displayPrice'] ,
                                        'price_displayQualifier'=> $getSingleProperty['data']['dataSource']['price']['displayQualifier'] ,
                                        'price_currency'=> $getSingleProperty['data']['dataSource']['price']['currency'] ,
                                        'price_property_currency'=> $getSingleProperty['data']['dataSource']['price']['property_currency'] ,
                                        'price_sale_price'=> $getSingleProperty['data']['dataSource']['price']['sale_price'] ,
                                        'price_trxDate'=> $getSingleProperty['data']['dataSource']['price']['trxDate'] ,
                                    ]);
                                }
                            }

                            if (isset($getSingleProperty['data']['dataSource']['contact'])) {
                                $propContactCheck = PropertyContact::where('contact_property_sfid', 'Like', $getSingleProperty['data']['sfid'])->get();
                                if (count($propContactCheck) > 0) {
                                    $propertyContact = PropertyContact::where('contact_property_sfid',$getSingleProperty['data']['sfid'])->update([
                                        'contact_officeName' => $getSingleProperty['data']['dataSource']['contact']['officeName'],
                                        'contact_officeLng' => $getSingleProperty['data']['dataSource']['contact']['officeLng'],
                                        'contact_officeImg' => $getSingleProperty['data']['dataSource']['contact']['officeImg'],
                                        'contact_webTel' => $getSingleProperty['data']['dataSource']['contact']['webTel'],
                                        'contact_shortOfficeName' => $getSingleProperty['data']['dataSource']['contact']['shortOfficeName'],
                                        'contact_officeAddress' => $getSingleProperty['data']['dataSource']['contact']['officeAddress'],
                                        'contact_officeEmail' => $getSingleProperty['data']['dataSource']['contact']['officeEmail'],
                                        'contact_officeLat' => $getSingleProperty['data']['dataSource']['contact']['officeLat'],
                                        'contact_offcode' => $getSingleProperty['data']['dataSource']['contact']['offcode'],
                                        'contact_officeManager' => $getSingleProperty['data']['dataSource']['contact']['officeManager'],
                                        'contact_officeID' => $getSingleProperty['data']['dataSource']['contact']['officeID'],
                                        'contact_officeURL' => $getSingleProperty['data']['dataSource']['contact']['officeURL'],
                                        'contact_portalEmail' => $getSingleProperty['data']['dataSource']['contact']['portalEmail'],
                                        'contact_officeManagerID' => $getSingleProperty['data']['dataSource']['contact']['officeManagerID'],
                                    ]);
                                }else{
                                    $propertyContact = PropertyContact::create([
                                        'contact_property_sfid'=> $getSingleProperty['data']['sfid'],
                                        'contact_officeName' => $getSingleProperty['data']['dataSource']['contact']['officeName'],
                                        'contact_officeLng' => $getSingleProperty['data']['dataSource']['contact']['officeLng'],
                                        'contact_officeImg' => $getSingleProperty['data']['dataSource']['contact']['officeImg'],
                                        'contact_webTel' => $getSingleProperty['data']['dataSource']['contact']['webTel'],
                                        'contact_shortOfficeName' => $getSingleProperty['data']['dataSource']['contact']['shortOfficeName'],
                                        'contact_officeAddress' => $getSingleProperty['data']['dataSource']['contact']['officeAddress'],
                                        'contact_officeEmail' => $getSingleProperty['data']['dataSource']['contact']['officeEmail'],
                                        'contact_officeLat' => $getSingleProperty['data']['dataSource']['contact']['officeLat'],
                                        'contact_offcode' => $getSingleProperty['data']['dataSource']['contact']['offcode'],
                                        'contact_officeManager' => $getSingleProperty['data']['dataSource']['contact']['officeManager'],
                                        'contact_officeID' => $getSingleProperty['data']['dataSource']['contact']['officeID'],
                                        'contact_officeURL' => $getSingleProperty['data']['dataSource']['contact']['officeURL'],
                                        'contact_portalEmail' => $getSingleProperty['data']['dataSource']['contact']['portalEmail'],
                                        'contact_officeManagerID' => $getSingleProperty['data']['dataSource']['contact']['officeManagerID'],
                                    ]);
                                }
                            }
                            
                        }

                        if (isset($getSingleProperty['data']['agent'])) {
                            $propContactCheck = PropertyAgent::where('agent_property_sfid', 'Like', $getSingleProperty['data']['sfid'])->get();
                            if (count($propContactCheck) > 0) {
                                $propertyContact = PropertyAgent::where('agent_property_sfid',$getSingleProperty['data']['sfid'])->update([
                                    'agent_sfid' => $getSingleProperty['data']['agent']['sfid'],
                                    'agent_name' => $getSingleProperty['data']['agent']['name'],
                                    'agent_profilePicture' => $getSingleProperty['data']['agent']['profilePicture'],
                                    'agent_mobileNumber' => $getSingleProperty['data']['agent']['mobileNumber'],
                                    'agent_email' => $getSingleProperty['data']['agent']['email'],
                                    'agent_description' => $getSingleProperty['data']['agent']['description'],
                                ]);
                            }else{
                                $propertyContact = PropertyAgent::create([
                                    'agent_property_sfid'=> $getSingleProperty['data']['sfid'],
                                    'agent_sfid' => $getSingleProperty['data']['agent']['sfid'],
                                    'agent_name' => $getSingleProperty['data']['agent']['name'],
                                    'agent_profilePicture' => $getSingleProperty['data']['agent']['profilePicture'],
                                    'agent_mobileNumber' => $getSingleProperty['data']['agent']['mobileNumber'],
                                    'agent_email' => $getSingleProperty['data']['agent']['email'],
                                    'agent_description' => $getSingleProperty['data']['agent']['description'],
                                ]);
                            }
                        }
                    } else {
                        $property = Property::create([
                            "sfid" => $getSingleProperty['data']['sfid'],
                            "region" => $getSingleProperty['data']['region'],
                            "country" => $getSingleProperty['data']['country'],
                            "city" => $getSingleProperty['data']['city'],
                            "areaLocationTitle" => $getSingleProperty['data']['areaLocationTitle'],
                            "areaLocationDescription" => $getSingleProperty['data']['areaLocationDescription'],
                            "locationMapLat" => $getSingleProperty['data']['locationMapLat'],
                            "locationMapLon" => $getSingleProperty['data']['locationMapLon'],
                            "propertyLat" => $getSingleProperty['data']['propertyLat'],
                            "propertyLon" => $getSingleProperty['data']['propertyLon'],
                            "propertyType" => $getSingleProperty['data']['propertyType'],
                            "featured" => $getSingleProperty['data']['featured'],
                            "saleRentType" => $getSingleProperty['data']['saleRentType'],
                            "type" => $getSingleProperty['data']['type'],
                            "rentalType" => $getSingleProperty['data']['rentalType'],
                            "bedrooms" => $getSingleProperty['data']['bedrooms'],
                            "bathrooms" => $getSingleProperty['data']['bathrooms'],
                            "diningRooms" => $getSingleProperty['data']['diningRooms'],
                            "livingRooms" => $getSingleProperty['data']['livingRooms'],
                            "unit" => $getSingleProperty['data']['unit'],
                            "unitStreetName" => $getSingleProperty['data']['unitStreetName'],
                            "price" => $getSingleProperty['data']['price'],
                            "currency" => $getSingleProperty['data']['currency'],
                            "askingPriceFlag" => $getSingleProperty['data']['askingPriceFlag'],
                            "dateTimeAdded" => $getSingleProperty['data']['dateTimeAdded'],
                            "uniqueIdentifier" => $getSingleProperty['data']['uniqueIdentifier'],
                            "propertyName" => $getSingleProperty['data']['propertyName'],
                            "shortDescription" => $getSingleProperty['data']['shortDescription'],
                            "longDescription" => $getSingleProperty['data']['longDescription'],
                            "images" => $getSingleProperty['data']['images'] ? implode(',', $getSingleProperty['data']['images']) : "null",
                            "coveredArea" => $getSingleProperty['data']['coveredArea'],
                            "measureUnit" => $getSingleProperty['data']['measureUnit'],
                            "lifeStyle" => $getSingleProperty['data']['lifeStyle'],
                            "amenities" => $getSingleProperty['data']['amenities'],
                            // "dataSource" => $getSingleProperty['data']['dataSource'],
                        ]);
                        if (isset($getSingleProperty['data']['dataSource'])) {
                            if (isset($getSingleProperty['data']['dataSource']['img'])) {
                                if (isset($getSingleProperty['data']['dataSource']['img']['images_img'])) {
                                    $images = [];
                                    foreach ($getSingleProperty['data']['dataSource']['img']['images_img'] as $getMulImg) {
                                        array_push($images, $getMulImg['media_url']);
                                    }
                                    $propImgCheck = PropertyImages::where('images_property_sfid', 'Like', $getSingleProperty['data']['sfid'])->get();
                                    if (count($propImgCheck) > 0) {
                                        $property = PropertyImages::where('images_property_sfid',$getSingleProperty['data']['sfid'])->update([
                                            'images_leadImage' => $getSingleProperty['data']['dataSource']['img']['leadImage']['media_url'],
                                            'images_img' => json_encode($images),
                                        ]);
                                    }else{
                                        $propertyImage = PropertyImages::create([
                                            'images_property_sfid'=> $getSingleProperty['data']['sfid'],
                                            'images_leadImage' => $getSingleProperty['data']['dataSource']['img']['leadImage']['media_url'],
                                            'images_img' => json_encode($images),
                                        ]);
                                    }
                                }
                            }

                            if (isset($getSingleProperty['data']['dataSource']['address'])) {
                                $propAddCheck = PropertyAddress::where('address_property_sfid', 'Like', $getSingleProperty['data']['sfid'])->get();
                                if (count($propAddCheck) > 0) {
                                    $propertyAddress = PropertyAddress::where('address_property_sfid',$getSingleProperty['data']['sfid'])->update([
                                        'address_country'=> $getSingleProperty['data']['dataSource']['address']['country'],
                                        'address_lng'=> $getSingleProperty['data']['dataSource']['address']['lng'],
                                        'address_town'=> $getSingleProperty['data']['dataSource']['address']['town'],
                                        'address_city'=> $getSingleProperty['data']['dataSource']['address']['city'],
                                        'address_countrycode'=> $getSingleProperty['data']['dataSource']['address']['countrycode'],
                                        'address_county'=> $getSingleProperty['data']['dataSource']['address']['county'],
                                        'address_sectorName'=> $getSingleProperty['data']['dataSource']['address']['sectorName'],
                                        'address_cTaxYear'=> $getSingleProperty['data']['dataSource']['address']['cTaxYear'],
                                        'address_os_town_city'=> $getSingleProperty['data']['dataSource']['address']['os_town_city'],
                                        'address_propertyReference'=> $getSingleProperty['data']['dataSource']['address']['propertyReference'],
                                        'address_council'=> $getSingleProperty['data']['dataSource']['address']['council'],
                                        'address_displayAddress'=> $getSingleProperty['data']['dataSource']['address']['displayAddress'],
                                        'address_street'=> $getSingleProperty['data']['dataSource']['address']['street'],
                                        'address_outcode'=> $getSingleProperty['data']['dataSource']['address']['outcode'],
                                        'address_cTaxPrice'=> $getSingleProperty['data']['dataSource']['address']['cTaxPrice'],
                                        'address_full_postcode'=> $getSingleProperty['data']['dataSource']['address']['full_postcode'],
                                        'address_state'=> $getSingleProperty['data']['dataSource']['address']['state'],
                                        'address_outcodeName'=> $getSingleProperty['data']['dataSource']['address']['outcodeName'],
                                        'address_village'=> $getSingleProperty['data']['dataSource']['address']['village'],
                                        'address_cTaxBand'=> $getSingleProperty['data']['dataSource']['address']['cTaxBand'],
                                        'address_sector'=> $getSingleProperty['data']['dataSource']['address']['sector'],
                                        'address_lat'=> $getSingleProperty['data']['dataSource']['address']['lat']
                                    ]);
                                }else{
                                    $propertyAddress = PropertyAddress::create([
                                        'address_property_sfid'=> $getSingleProperty['data']['sfid'],
                                        'address_country'=> $getSingleProperty['data']['dataSource']['address']['country'],
                                        'address_lng'=> $getSingleProperty['data']['dataSource']['address']['lng'],
                                        'address_town'=> $getSingleProperty['data']['dataSource']['address']['town'],
                                        'address_city'=> $getSingleProperty['data']['dataSource']['address']['city'],
                                        'address_countrycode'=> $getSingleProperty['data']['dataSource']['address']['countrycode'],
                                        'address_county'=> $getSingleProperty['data']['dataSource']['address']['county'],
                                        'address_sectorName'=> $getSingleProperty['data']['dataSource']['address']['sectorName'],
                                        'address_cTaxYear'=> $getSingleProperty['data']['dataSource']['address']['cTaxYear'],
                                        'address_os_town_city'=> $getSingleProperty['data']['dataSource']['address']['os_town_city'],
                                        'address_propertyReference'=> $getSingleProperty['data']['dataSource']['address']['propertyReference'],
                                        'address_council'=> $getSingleProperty['data']['dataSource']['address']['council'],
                                        'address_displayAddress'=> $getSingleProperty['data']['dataSource']['address']['displayAddress'],
                                        'address_street'=> $getSingleProperty['data']['dataSource']['address']['street'],
                                        'address_outcode'=> $getSingleProperty['data']['dataSource']['address']['outcode'],
                                        'address_cTaxPrice'=> $getSingleProperty['data']['dataSource']['address']['cTaxPrice'],
                                        'address_full_postcode'=> $getSingleProperty['data']['dataSource']['address']['full_postcode'],
                                        'address_state'=> $getSingleProperty['data']['dataSource']['address']['state'],
                                        'address_outcodeName'=> $getSingleProperty['data']['dataSource']['address']['outcodeName'],
                                        'address_village'=> $getSingleProperty['data']['dataSource']['address']['village'],
                                        'address_cTaxBand'=> $getSingleProperty['data']['dataSource']['address']['cTaxBand'],
                                        'address_sector'=> $getSingleProperty['data']['dataSource']['address']['sector'],
                                        'address_lat'=> $getSingleProperty['data']['dataSource']['address']['lat']
                                    ]);
                                }
                            }

                            if (isset($getSingleProperty['data']['dataSource']['price'])) {
                                $propPriceCheck = PropertyPrice::where('price_property_sfid', 'Like', $getSingleProperty['data']['sfid'])->get();
                                if (count($propPriceCheck) > 0) {
                                    $property = PropertyPrice::where('price_property_sfid',$getSingleProperty['data']['sfid'])->update([
                                        'price_property_price'=> $getSingleProperty['data']['dataSource']['price']['property_price'],
                                        'price_property_price_gbp'=> $getSingleProperty['data']['dataSource']['price']['property_price_gbp'] ,
                                        'price_property_currency_symbol'=> $getSingleProperty['data']['dataSource']['price']['property_currency_symbol'] ,
                                        'price_displaySoldDetails'=> $getSingleProperty['data']['dataSource']['price']['displaySoldDetails'] ,
                                        'price_sale_price_gbp'=> $getSingleProperty['data']['dataSource']['price']['sale_price_gbp'] ,
                                        'price_displayPrice'=> $getSingleProperty['data']['dataSource']['price']['displayPrice'] ,
                                        'price_displayQualifier'=> $getSingleProperty['data']['dataSource']['price']['displayQualifier'] ,
                                        'price_currency'=> $getSingleProperty['data']['dataSource']['price']['currency'] ,
                                        'price_property_currency'=> $getSingleProperty['data']['dataSource']['price']['property_currency'] ,
                                        'price_sale_price'=> $getSingleProperty['data']['dataSource']['price']['sale_price'] ,
                                        'price_trxDate'=> $getSingleProperty['data']['dataSource']['price']['trxDate'] ,
                                    ]);
                                }else{
                                    $propertyAddress = PropertyPrice::create([
                                        'price_property_sfid'=> $getSingleProperty['data']['sfid'],
                                        'price_property_price'=> $getSingleProperty['data']['dataSource']['price']['property_price'],
                                        'price_property_price_gbp'=> $getSingleProperty['data']['dataSource']['price']['property_price_gbp'] ,
                                        'price_property_currency_symbol'=> $getSingleProperty['data']['dataSource']['price']['property_currency_symbol'] ,
                                        'price_displaySoldDetails'=> $getSingleProperty['data']['dataSource']['price']['displaySoldDetails'] ,
                                        'price_sale_price_gbp'=> $getSingleProperty['data']['dataSource']['price']['sale_price_gbp'] ,
                                        'price_displayPrice'=> $getSingleProperty['data']['dataSource']['price']['displayPrice'] ,
                                        'price_displayQualifier'=> $getSingleProperty['data']['dataSource']['price']['displayQualifier'] ,
                                        'price_currency'=> $getSingleProperty['data']['dataSource']['price']['currency'] ,
                                        'price_property_currency'=> $getSingleProperty['data']['dataSource']['price']['property_currency'] ,
                                        'price_sale_price'=> $getSingleProperty['data']['dataSource']['price']['sale_price'] ,
                                        'price_trxDate'=> $getSingleProperty['data']['dataSource']['price']['trxDate'] ,
                                    ]);
                                }
                            }

                            if (isset($getSingleProperty['data']['dataSource']['contact'])) {
                                $propContactCheck = PropertyContact::where('contact_property_sfid', 'Like', $getSingleProperty['data']['sfid'])->get();
                                if (count($propContactCheck) > 0) {
                                    $propertyContact = PropertyContact::where('contact_property_sfid',$getSingleProperty['data']['sfid'])->update([
                                        'contact_officeName' => $getSingleProperty['data']['dataSource']['contact']['officeName'],
                                        'contact_officeLng' => $getSingleProperty['data']['dataSource']['contact']['officeLng'],
                                        'contact_officeImg' => $getSingleProperty['data']['dataSource']['contact']['officeImg'],
                                        'contact_webTel' => $getSingleProperty['data']['dataSource']['contact']['webTel'],
                                        'contact_shortOfficeName' => $getSingleProperty['data']['dataSource']['contact']['shortOfficeName'],
                                        'contact_officeAddress' => $getSingleProperty['data']['dataSource']['contact']['officeAddress'],
                                        'contact_officeEmail' => $getSingleProperty['data']['dataSource']['contact']['officeEmail'],
                                        'contact_officeLat' => $getSingleProperty['data']['dataSource']['contact']['officeLat'],
                                        'contact_offcode' => $getSingleProperty['data']['dataSource']['contact']['offcode'],
                                        'contact_officeManager' => $getSingleProperty['data']['dataSource']['contact']['officeManager'],
                                        'contact_officeID' => $getSingleProperty['data']['dataSource']['contact']['officeID'],
                                        'contact_officeURL' => $getSingleProperty['data']['dataSource']['contact']['officeURL'],
                                        'contact_portalEmail' => $getSingleProperty['data']['dataSource']['contact']['portalEmail'],
                                        'contact_officeManagerID' => $getSingleProperty['data']['dataSource']['contact']['officeManagerID'],
                                    ]);
                                }else{
                                    $propertyContact = PropertyContact::create([
                                        'contact_property_sfid'=> $getSingleProperty['data']['sfid'],
                                        'contact_officeName' => $getSingleProperty['data']['dataSource']['contact']['officeName'],
                                        'contact_officeLng' => $getSingleProperty['data']['dataSource']['contact']['officeLng'],
                                        'contact_officeImg' => $getSingleProperty['data']['dataSource']['contact']['officeImg'],
                                        'contact_webTel' => $getSingleProperty['data']['dataSource']['contact']['webTel'],
                                        'contact_shortOfficeName' => $getSingleProperty['data']['dataSource']['contact']['shortOfficeName'],
                                        'contact_officeAddress' => $getSingleProperty['data']['dataSource']['contact']['officeAddress'],
                                        'contact_officeEmail' => $getSingleProperty['data']['dataSource']['contact']['officeEmail'],
                                        'contact_officeLat' => $getSingleProperty['data']['dataSource']['contact']['officeLat'],
                                        'contact_offcode' => $getSingleProperty['data']['dataSource']['contact']['offcode'],
                                        'contact_officeManager' => $getSingleProperty['data']['dataSource']['contact']['officeManager'],
                                        'contact_officeID' => $getSingleProperty['data']['dataSource']['contact']['officeID'],
                                        'contact_officeURL' => $getSingleProperty['data']['dataSource']['contact']['officeURL'],
                                        'contact_portalEmail' => $getSingleProperty['data']['dataSource']['contact']['portalEmail'],
                                        'contact_officeManagerID' => $getSingleProperty['data']['dataSource']['contact']['officeManagerID'],
                                    ]);
                                }
                            }
                            
                        }

                        if (isset($getSingleProperty['data']['agent'])) {
                            $propContactCheck = PropertyAgent::where('agent_property_sfid', 'Like', $getSingleProperty['data']['sfid'])->get();
                            if (count($propContactCheck) > 0) {
                                $propertyContact = PropertyAgent::where('agent_property_sfid',$getSingleProperty['data']['sfid'])->update([
                                    'agent_sfid' => $getSingleProperty['data']['agent']['sfid'],
                                    'agent_name' => $getSingleProperty['data']['agent']['name'],
                                    'agent_profilePicture' => $getSingleProperty['data']['agent']['profilePicture'],
                                    'agent_mobileNumber' => $getSingleProperty['data']['agent']['mobileNumber'],
                                    'agent_email' => $getSingleProperty['data']['agent']['email'],
                                    'agent_description' => $getSingleProperty['data']['agent']['description'],
                                ]);
                            }else{
                                $propertyContact = PropertyAgent::create([
                                    'agent_property_sfid'=> $getSingleProperty['data']['sfid'],
                                    'agent_sfid' => $getSingleProperty['data']['agent']['sfid'],
                                    'agent_name' => $getSingleProperty['data']['agent']['name'],
                                    'agent_profilePicture' => $getSingleProperty['data']['agent']['profilePicture'],
                                    'agent_mobileNumber' => $getSingleProperty['data']['agent']['mobileNumber'],
                                    'agent_email' => $getSingleProperty['data']['agent']['email'],
                                    'agent_description' => $getSingleProperty['data']['agent']['description'],
                                ]);
                            }
                        }
                    }
                }
            }
        } else {
            dd('Login Expired, Please try again');
        }
        return redirect('property-listing');
    }

    public function propertyDetail(Request $request, $id, $propertySlug)
    {
        $agent = PropertyAgent::where('agent_property_sfid', 'like', $id)->first();
        $property = Property::where('sfid', 'like', $id)->first();
        return view('property-detail', compact('property','agent'));
    }

    public function locationStore(Request $request)
    {
        $loginResponse = Http::withHeaders([
            'Content-Type' => 'application/json'
        ])->post('https://eu11-dev.propertyraptor.com/hornet/client/login', [
            'username'=>'eu11_001_dev@pr.com',
            'password'=>'tVh6Y2jK'
        ]);
        $getLoginToken = $loginResponse->json();
        $token = $getLoginToken['data']['token'];;
        $response = Http::withHeaders([
            'Content-Type' => 'application/json',
            'token' => $token,
        ])->post('https://eu11-dev.propertyraptor.com/hornet/external/portal/queryLocations', [
            'companyId'=> 'eu11_001',
        ]);
        $getCountryList = $response->json();
        // dd($getCountryList['data']);
        
        if ($getCountryList['data'] != null) {
            foreach ($getCountryList['data'] as $country) {
                $storeCountry = Country::create([
                    "country_sfid" => $country['sfid'],
                    "contry_name" => $country['name'],
                ]);
                if ($country['subLocations'] != null) {
                    foreach ($country['subLocations'] as $state) {
                        $StoreState = State::create([
                            "country_sfid" => $country['sfid'],
                            "state_sfid" => $state['sfid'],
                            "state_name" => $state['name'],
                        ]);
                        if ($state['subLocations'] != null) {
                            foreach ($state['subLocations'] as $city) {
                                $storeCity = City::create([
                                    "state_sfid" => $state['sfid'],
                                    "city_sfid" => $city['sfid'],
                                    "city_name" => $city['name'],
                                ]);
                            }
                        }
                    }
                }
            }
        } else {

            dd('Login Expired, Please try again');
        }

        return redirect('property-listing');

    }
}
