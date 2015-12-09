<template>

    <form class="pk-panel-teaser uk-form uk-form-stacked" v-if="editing">

        <div class="uk-form-row">
            <label for="form-hello-title" class="uk-form-label">{{ 'Title' | trans }}</label>

            <div class="uk-form-controls">
                <input id="form-hello-title" class="uk-width-1-1" type="text" name="widget[title]" v-model="widget.title">
            </div>
        </div>

    </form>

    <div v-else>

        <h3 v-if="widget.title">{{ widget.title }}</h3>

    </div>

</template>

<script>

    module.exports = {

        type: {

            id: 'hello',
            label: 'Hello Dashboard',
            defaults: {
                title: ''
            }

        },

        replace: false,

        props: ['widget', 'editing']

    };

    window.Dashboard.components.hello = module.exports;

</script>
