var table = $("#table").DataTable({
    lengthMenu: [
        [10, 25, 50, -1],
        [10, 25, 50, "ALL"],
    ],
    scrollX: true,
    processing: true,
    serverSide: true,
    ajax: {
        url: "/tenant/data",
        type: "POST",
    },
    columnDefs: [
        {
            targets: 0,
            class: "text-nowrap",
            render: function (data, type, row, meta) {
                return (
                    '<a href="' +
                    "tenant" +
                    "/" +
                    row.tenant_id +
                    '">' +
                    row.unit +
                    "</a>"
                );
            },
        },
        {
            targets: 1,
            class: "text-nowrap",
            render: function (data, type, row, meta) {
                return (
                    '<a href="' +
                    "tenant" +
                    "/" +
                    row.tenant_id +
                    '">' +
                    row.nama +
                    "</a>"
                );
                // return row.nama;
            },
        },
        {
            targets: 2,
            visible: false,
            class: "text-nowrap",
            render: function (data, type, row, meta) {
                return (
                    '<a href="' +
                    "tenant" +
                    "/" +
                    row.tenant_id +
                    '">' +
                    row.nomor_ktp +
                    "</a>"
                );
            },
        },
        {
            targets: 3,
            class: "text-nowrap",
            render: function (data, type, row, meta) {
                return (
                    '<a href="' +
                    "tenant" +
                    "/" +
                    row.tenant_id +
                    '">' +
                    row.telp1 +
                    ", " +
                    row.telp2 +
                    "</a>"
                );
            },
        },
        {
            targets: 4,
            class: "text-nowrap",
            render: function (data, type, row, meta) {
                return (
                    '<a href="' +
                    "tenant" +
                    "/" +
                    row.tenant_id +
                    '">' +
                    row.email1 +
                    ", " +
                    row.email2 +
                    "</a>"
                );
            },
        },
        {
            targets: 5,
            visible: false,
            class: "text-nowrap",
            render: function (data, type, row, meta) {
                return (
                    '<a href="' +
                    "tenant" +
                    "/" +
                    row.tenant_id +
                    '">' +
                    row.alamat +
                    "</a>"
                );
            },
        },
        {
            targets: 6,
            class: "text-nowrap",
            render: function (data, type, row, meta) {
                return (
                    '<a href="' +
                    "tenant" +
                    "/" +
                    row.tenant_id +
                    '">' +
                    row.no_inet_basic +
                    "</a>"
                );
            },
        },
        {
            targets: 7,
            class: "text-nowrap",
            render: function (data, type, row, meta) {
                return (
                    '<a href="' +
                    "tenant" +
                    "/" +
                    row.tenant_id +
                    '">' +
                    "Pots1: " +
                    row.no_telp1_basic +
                    ", Pots2: " +
                    row.no_telp2_basic +
                    "</a>"
                );
            },
        },
        {
            targets: 8,
            class: "text-nowrap",
            render: function (data, type, row, meta) {
                return (
                    '<a href="' +
                    "tenant" +
                    "/" +
                    row.tenant_id +
                    '">' +
                    row.no_inet_upgrade +
                    "</a>"
                );
            },
        },
        {
            targets: 9,
            class: "text-nowrap",
            render: function (data, type, row, meta) {
                return (
                    '<a href="' +
                    "tenant" +
                    "/" +
                    row.tenant_id +
                    '">' +
                    "Pots1: " +
                    row.no_telp1_upgrade +
                    ", Pots2: " +
                    row.no_telp2_upgrade +
                    "</a>"
                );
            },
        },
        {
            targets: 10,
            // "visible": false,
            class: "text-nowrap",
            render: function (data, type, row, meta) {
                return (
                    '<a href="' +
                    "tenant" +
                    "/" +
                    row.tenant_id +
                    '">' +
                    row.pppoe +
                    "</a>"
                );
            },
        },
        {
            targets: 11,
            class: "text-nowrap",
            render: function (data, type, row, meta) {
                return (
                    '<a href="' +
                    "tenant" +
                    "/" +
                    row.tenant_id +
                    '">' +
                    row.pass_pppoe +
                    "</a>"
                );
            },
        },
    ],
});

$("#komplekFilter").on("change", function () {
    var filter_value = $(this).val();
    var liveurl = "/tenant/data/" + filter_value;
    table.ajax.url(liveurl).load();
});
