[{$smarty.block.parent}]
                [{if $oView->getAlsoBoughtTheseProducts()}]
                    <br><br>
                    <h1 class="pageHead">
                         [{ oxmultilang ident="PAGE_CHECKOUT_THANKYOU_ALSOBOUGHT" }]
                    </h1>
                    [{include file="widget/product/list.tpl" type=$oView->getListDisplayType() listId="alsoBoughtThankyou" products=$oView->getAlsoBoughtTheseProducts() blDisableToCart=true}]
                [{/if}]