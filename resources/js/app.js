import './bootstrap';
// Import our custom CSS
import '../../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js';

$(document).ready(function () {

    const $body = $("body");
    const $sidebar = $("#sidebar");
    const $toggleSidebar = $("#toggleSidebar");
    const $toggleDarkMode = $("#toggleDarkMode");
    const $darkModeIcon = $("#darkModeIcon");
    const $root = $(document.documentElement);

    // Inisialisasi tooltips
    const $tooltipElements = $(".nav-tooltip");
    const tooltipInstances = $tooltipElements
        .map(function () {
            return new bootstrap.Tooltip(this, {
                placement: "right",
                trigger: "hover",
            });
        })
        .get();

    function toggleTooltips() {
        const isCollapsed = $body.hasClass("sidebar-collapsed");
        tooltipInstances.forEach((t) =>
            isCollapsed ? t.enable() : t.disable()
        );
    }

    // Sidebar toggle handler
    $toggleSidebar.on("click", function () {
        $sidebar.toggleClass("collapsed");
        $body.toggleClass("sidebar-collapsed");
        toggleTooltips();
    });

    // Inisialisasi tooltips pada load pertama
    toggleTooltips();

    // Toggle dark mode
    $toggleDarkMode.on("click", function () {
        const currentTheme = $root.attr("data-bs-theme");
        const newTheme = currentTheme === "dark" ? "light" : "dark";
        $root.attr("data-bs-theme", newTheme);
        $darkModeIcon.text(newTheme === "dark" ? "light_mode" : "dark_mode");
    });

    // Update toggle icon on submenu collapse
    $('[data-bs-toggle="collapse"]').each(function () {
        const $toggle = $(this);
        const $icon = $toggle.find(".toggle-icon");
        const targetId = $toggle.attr("href");
        const $target = $(targetId);

        $target.on("shown.bs.collapse", function () {
            $icon.text("expand_less");
        });

        $target.on("hidden.bs.collapse", function () {
            $icon.text("expand_more");
        });
    });

    // Handle New Profile Modal link click
    $("a[href='#newProfileModal").on("click",function (e) {
        e.preventDefault();
        const url = $(this).attr("data-url");
        $("#myModal").find(".modal-title").text("New Profile");
        $("#myModal").find(".modal-body").load(url);
        $("#myModal").modal("show");

    });
});
