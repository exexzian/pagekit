module.exports = [

    {
        entry: {
            "extensions": "./app/views/extensions",
            "marketplace": "./app/views/marketplace",
            "themes": "./app/views/themes",
            "update": "./app/views/update",
            "upload": "./app/components/upload.vue"
        },
        output: {
            filename: "./app/bundle/[name].js"
        },
        module: {
            loaders: [
                { test: /\.html$/, loader: "html" },
                { test: /\.vue$/, loader: "vue" }
            ]
        }
    }

];
