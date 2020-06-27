// (function () {
//     const client = algoliasearch("IJT24WP39J", "68f68fd025d79e87e8123412fa07b81a");
//     const players = client.initIndex("products");
//
//
//     autocomplete('#aa-search-input', {}, [
//         {
//             source: autocomplete.sources.hits(players, { hitsPerPage: 3 }),
//             displayKey: 'pro_name',
//             templates: {
//                 header: '<div class="aa-suggestions-category">Products</div>',
//                 suggestion:function(suggestion){
//                     return '<span>' +
//                     suggestion.brands + '</span><span>' +
//                         suggestion.pro_name + '</span>';
//                 }
//             }
//         },
//
//
//     ]);
// })();