/**
 * Created by kevin.schmid on 21.09.2017.
 */
Ext.define('Shopware.apps.KSchmidPriceList.view.list.Window', {
    extend: 'Shopware.window.Listing',
    alias: 'widget.k-schmid-price-list-list-window',
    title : 'Preisliste',
    configure: function() {
        return {
            listingGrid: 'Shopware.apps.KSchmidPriceList.view.list.List',
            listingStore: 'Shopware.apps.KSchmidPriceList.store.PriceList'
        };
    }
});