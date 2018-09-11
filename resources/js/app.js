
new Vue({
    el: '#crud',
    created: function() {
        this.getKeeps();
    },
    data: {
        keeps: [],
        newKeep: '',
        fillKeep: {'id': '', 'keep': ''},
        errors: []
    },
    methods: {
        getKeeps: function() {
            axios.get('/tasks').then(response => {
                this.keeps = response.data.tasks.data
            });
        },
        editKeep: function(keep) {
            this.fillKeep.id    = keep.id;
            this.fillKeep.keep  = keep.keep;
            $('#edit').modal('show');
        },
        updateKeep: function(id) {
            var url = 'tasks/' + id;
            axios.put(url, this.fillKeep).then(response => {
                this.getKeeps();
                this.fillKeep = {'id': '', 'keep': ''};
                this.errors = [];
                $('#edit').modal('hide');
                toastr.success('Tarea actualizada con éxito');
            }).catch(error => {
                this.errors = error.response.data
            });
        },
        deleteKeep: function(keep) {
            axios.delete('tasks/' + keep.id).then(response => {
                this.getKeeps();
                toastr.success('Tarea eliminada con éxito');
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
                toastr.success('Tarea creada con éxito');
            }).catch(error => {
                this.errors = error.response.data
            });
        },
    }
});