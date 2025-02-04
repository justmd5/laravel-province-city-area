<?php
/**
 * Created by PhpStorm.
 * User: aoxiang
 * Date: 2019-06-04
 * Time: 21:46
 */

namespace Aoxiang\Pca;

use Aoxiang\Pca\Models\ProvinceCityArea as PCA;

class ProvinceCityArea
{
    static public function test()
    {
        return date('Y-m-d H:i:s');
    }

    static public function getProvinceList()
    {
        return self::getListByParentId(0);
    }

    static public function getCityList($provinceId)
    {
        return self::getListByParentId($provinceId);
    }

    static public function getAreaList($cityId)
    {
        return self::getListByParentId($cityId);
    }

    static public function getProvince($provinceId)
    {
        return self::getItem($provinceId);
    }

    static public function getCity($cityId)
    {
        return self::getItem($cityId);
    }

    static public function getArea($areaId)
    {
        return self::getItem($areaId);
    }


    static protected function getListByParentId($parentId)
    {
        return PCA::where('parent_id', $parentId)->get();
    }

    static protected function getItem($id)
    {
        return PCA::where('id', $id)->first();
    }


    static public function getName($provinceId = 0, $cityId = 0, $areaId = 0)
    {
        $text = [];
        if (!empty($provinceId)) {
            $province = self::getItem($provinceId);
            $text[]   = $province->name;
        }

        if (!empty($cityId)) {
            $city   = self::getItem($cityId);
            $text[] = $city->name;
        }

        if (!empty($areaId)) {
            $area   = self::getItem($areaId);
            $text[] = $area->name;
        }

        return implode('', $text);
    }
}