<div class="mt-10 bg-dark-blue">
    <ul class="max-w-screen-xl mx-auto md:px-3 flex px-1">
        @includeWhen(has_nav_menu('product_navigation'), 'menus.product-menu', ['do_menu' => $product_menu, 'display_burger' => false])
    </ul>
</div>