/**
 * Created by kevin.schmid on 21.09.2017.
 */
Ext.define('Shopware.apps.KSchmidPriceList.model.PriceList', {
    extend: 'Shopware.data.Model',
    configure: function() {
        return {
            controller: 'KSchmidPriceList',
            detail: 'Shopware.apps.KSchmidPriceList.view.detail.Container'
        };
    },
    fields: [
        { name : 'id', type: 'int', useNull: true },
        { name : 'name', type: 'string', useNull: false },
    ],
})