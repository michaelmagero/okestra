
var WizardDemo = function () {
    $("#m_wizard"); var e, r, i = $("#m_form");
    return {
        init: function () {
            var n;
            $("#m_wizard"), i = $("#m_form"), (r = new mWizard("m_wizard", { startStep: 1 })).on("beforeNext", function (r) {
                !0 !== e.form() && r.stop()
            }), r.on("change", function (e) { mApp.scrollTop() }), e = i.validate({
                // rules: {
                //     contact_person_email: { required: !0, contact_person_email: !0 },

                // }, invalidHandler: function (e, r) {
                //     mApp.scrollTop(), swal({ title: "", text: "There are some errors in your submission. Make sure all fields are not Empty!.", type: "error", confirmButtonClass: "btn btn-secondary m-btn m-btn--wide" })
                // }, submitHandler: function (e) { }
            }), (n = i.find('[data-wizard-action="submit"]')).on("click", function (r) {
                e.form().submit();
            })
        }
    }
}(); jQuery(document).ready(function () { WizardDemo.init() });
