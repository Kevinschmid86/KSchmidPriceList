/**
 * Created by kevin.schmid on 21.09.2017.
 */
Ext.define('Shopware.apps.KSchmidPriceList.store.PriceList', {
    extend:'Shopware.store.Listing',
    configure: function() {
        return {
            controller: 'KSchmidPriceList'
        };
    },
    model: 'Shopware.apps.KSchmidPriceList.model.PriceList'
});