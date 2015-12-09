module.exports = {

    el: '#settings',

    data: function () {
        return window.$data;
    },

    methods: {

        save: function () {
            this.$http.post('admin/system/settings/config', { name: 'hello', config: this.config }, function () {
                this.$notify('Settings saved.');
            }).error(function (data) {
                this.$notify(data, 'danger');
            });
        }

    }

};

Vue.ready(module.exports);
