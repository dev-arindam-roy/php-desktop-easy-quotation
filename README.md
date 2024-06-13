# PHP Desktop Application - Easy Quotation

## Install the setup.exe file

### SETUP folder ==> EasyQuotation.exe (install it)

```js
{
    "application": {
        "single_instance_guid": "",
        "dpi_aware": true
    },
    "debugging": {
        "show_console": false,
        "subprocess_show_console": false,
        "log_level": "DEBUG4",
        "log_file": "debug.log"
    },
    "main_window": {
        "title": "Easy Quotation",
        "icon": "",
        "default_size": [800, 600],
        "minimum_size": [640, 480],
        "maximum_size": [0, 0],
        "disable_maximize_button": true,
        "center_on_screen": true,
        "start_maximized": true,
        "start_fullscreen": false,
        "always_on_top": false,
        "minimize_to_tray": false,
        "minimize_to_tray_message": "Minimized to tray"
    },
    "popup_window": {
        "icon": "",
        "fixed_title": "Easy Quotation",
        "center_relative_to_parent": true,
        "default_size": [800, 600]
    },
    "web_server": {
        "listen_on": ["127.0.0.1", 0],
        "www_directory": "www",
        "index_files": ["index.html", "index.php"],
        "cgi_interpreter": "php/php-cgi.exe",
        "cgi_extensions": ["php"],
        "cgi_temp_dir": "",
        "404_handler": "/pretty-urls.php",
        "hide_files": []
    },
    "chrome": {
        "log_file": "debug.log",
        "log_severity": "default",
        "cache_path": "webcache",
        "external_drag": true,
        "external_navigation": true,
        "reload_page_F5": true,
        "devtools_F12": false,
        "remote_debugging_port": 0,
        "command_line_switches": {},
        "enable_downloads": true,
        "context_menu": {
            "enable_menu": true,
            "navigation": true,
            "print": true,
            "view_source": false,
            "open_in_external_browser": true,
            "devtools": false
        }
    }
}
```
