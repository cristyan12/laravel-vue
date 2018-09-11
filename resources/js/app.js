
new Vue({
    el: '#crud',
    created: function() {
        this.getKeeps();
    },
    data: {
        keeps: [],
        newKeep: '',
        errors: []
    },
    methods: {
        getKeeps: function() {
            axios.get('/tasks').then(response => {
                this.keeps = response.data
            });
        },
        deleteKeep: function(keep) {
            axios.delete('tasks/' + keep.id).then(response => {
                this.getKeeps();
                toastr.success('Eliminado correctamente');
            });
        },
        createKeep: function() {
            var url = 'tasks';
            axios.post(url, {
                keep: this.newKeep
            }).then(response => {
                this.getKeeps();
                this.newKeep = '';
                this.errors = [];
                $('#create').modal('hide');
                toastr.success('Nueva tarea creada con éxito');
            }).catch(error => {
                this.errors = error.response.data
            });
        },
    }
});