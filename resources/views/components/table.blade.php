<script>
    // DataTables
    new DataTable('#table', {
        bStateSave: true,
        pageLength: 25,
        language: {
            url: 'https://cdn.datatables.net/plug-ins/1.13.5/i18n/ja.json',
        },
        order: [[ 0, 'desc' ]]
    });
</script>