<?php
class alsobought_basket_basket extends alsobought_basket_basket_parent
{
    public function getAlsoBoughtTheseProducts()
    {
        if ( $this->_aLastProducts === null ) {
            $this->_aLastProducts = false;
            $aBasketContents = array_values($this->getSession()->getBasket()->getContents());
            if ( $oBasketItem = $aBasketContents[0] ) {
                if ( $oProduct = $oBasketItem->getArticle(false) ) {
                    $this->_aLastProducts = $oProduct->getCustomerAlsoBoughtThisProducts();
                }
            }
        }
        return $this->_aLastProducts;
    }
}