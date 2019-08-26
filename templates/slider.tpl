<SECTION class="new-products">
    <H1 class="title">{$title}</H1>
    <H2 class="subtitle">{$subtitle}</H2>
    
    <DIV class="container">
        <DIV class="slider row">
            
        {foreach from=$products item=product} 
            <DIV class="product-box col-3">
                <DIV class="product-content">

                    <DIV class="price">
                        {if isset($product.discount)}
                            {$oldPrice = ((1+($product.discount/100))*$product.price)}
                            <SPAN class="discount">{$product.discount}%</SPAN>
                            <SPAN class="actual-price">{$product.price} zł</SPAN>
                            <SPAN class="old-price">{$oldPrice} zł</SPAN>
                        {else}
                            <SPAN class="actual-price">{$product.price} zł</SPAN>
                        {/if}
                    </DIV>

                    <DIV class="image">
                        <IMG src="{$product.image}" alt="{$product.{"prod-title"}}"/>
                    </DIV>

                    <DIV class="buy">
                        <DIV class="name">
                            {$product.{"prod-title"}}
                            <DIV id="buy-hover" class="invisible"><a href="{$product.link}">Kup teraz</a></DIV>
                        </DIV>
                    </DIV>
                </DIV>
            </DIV>
        {/foreach}
        </DIV>
    </DIV>
    
</SECTION>