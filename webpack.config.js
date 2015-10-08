module.exports = [

    {
        entry: {
            "settings": "./app/views/settings.js",
            "link": "./app/components/link.vue",
            "dashboard": "./app/components/dashboard.vue"
        },
        output: {
            filename: "./app/bundle/[name].js"
        },
        externals: {
            "lodash": "_",
            "jquery": "jQuery",
            "uikit": "UIkit",
            "vue": "Vue"
        },
        module: {
            loaders: [
                { test: /\.vue$/, loader: "vue" }
            ]
        }
    }

];
