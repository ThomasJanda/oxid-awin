<?php

namespace rs\awin\Core\Controller;

class ThankYouController extends ThankYouController_parent
{

    public function init()
    {
        $sRet = parent::init();
        $this->rs_awin();
        return $sRet;
    }
    protected function rs_awin()
    {

        /**
         * @var \oxorder $oOrder
         */
        $oOrder = $this->getOrder();

        $sMerchant = (int) $this->getConfig()->getConfigParam('rs-awin_id');
        if($sMerchant!="")
        {
            $awc = \OxidEsales\Eshop\Core\Registry::getUtilsServer()->getOxCookie('awc');

            $url = "https://www.awin1.com/sread.php?tt=ss&tv=2&merchant=".$sMerchant;
            //$url .= "&amount=" . $oOrder->getTotalOrderSum();
            $url .= "&amount=" . $oOrder->oxorder__oxtotalnetsum->value;
            $url .= "&ch=aw";
            $url .= "&cr=" . $oOrder->getOrderCurrency()->name;
            $url .= "&ref=" . $oOrder->oxorder__oxordernr->value;
            //$url .= "&parts=DEFAULT:" . $oOrder->getTotalOrderSum();
            $url .= "&parts=DEFAULT:" . $oOrder->oxorder__oxtotalnetsum->value;
            $url .= "&testmode=0&vc=" . "";
            if ($awc!="") {
                $url .= "&cks=" . $awc; // Populate the Awin click checksum if one is associated with the conversion
            }

            $c = curl_init();
            curl_setopt($c, CURLOPT_CONNECTTIMEOUT, 10);
            curl_setopt($c, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($c, CURLOPT_URL, $url);
            curl_exec($c);
            curl_close($c);

        }
    }
}
