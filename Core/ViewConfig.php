<?php

namespace rs\awin\Core;

use OxidEsales\Eshop\Core\Request;

class ViewConfig extends ViewConfig_parent
{
    /**
     * set awin cookie
     */
    public function rs_awin()
    {
        /** @var Request $request */
        $request = oxNew(Request::class);
        $sValue=$request->getRequestParameter("awc");
        if($sValue!="")
        {
            $iDays=365;
            $sName = "awc";
            $iTime = time() + $iDays*24*60*60;
            \OxidEsales\Eshop\Core\Registry::getUtilsServer()->setOxCookie($sName, $sValue, $iTime);
        }
    }
}
