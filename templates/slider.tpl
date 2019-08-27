<SECTION class="new-products">
    <H1 class="title">{$title}</H1>
    <H2 class="subtitle">{$subtitle}</H2>
    
    <DIV class="container">
        <DIV id="slider" class="slider row">
            
        {foreach from=$products key=index item=product} 
            <DIV data-key="{$index}" class="product-box col-12 col-sm-12 col-md-6 col-lg-3">
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

                    <DIV class="name">
                            <p class="description">{$product.{"prod-title"}}</p>
                            <DIV id="hover{$index}" class="hover">
                                <A href="{$product.link}" class="link">Kup teraz</A>
                            </DIV>
                    </DIV>
                </DIV>
            </DIV>
        {/foreach}
        </DIV>
    </DIV>
    
</SECTION>