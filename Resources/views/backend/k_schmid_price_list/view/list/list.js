/**
 * Created by kevin.schmid on 21.09.2017.
 */
Ext.define('Shopware.apps.KSchmidPriceList.view.list.List', {
    extend: 'Shopware.grid.Panel',
    alias: 'widget.k-schmid-price-list-listing-grid',
    region: 'center',
    configure: function() {
        return {
            detailWindow: 'Shopware.apps.KSchmidPriceList.view.detail.Window'
        };
    }
});