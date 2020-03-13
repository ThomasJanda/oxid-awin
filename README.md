# Oxid Cookie Manager

## Description

Implement the Awin tracking.

https://wiki.awin.com/index.php/Advertiser_Tracking_Guide/Conversion_Pixel_Only_Tracking

## Install

1. Copy module into following directory
        
        source/modules/rs/awin
        
2. Add following to composer.json on the shop root

        "autoload": {
            "psr-4": {
                "rs\\awin\\": "./source/modules/rs/awin"
            }
        },
    
3. Refresh autoloader files with composer in the oxid root directory.

        composer dump-autoload

6. Enable module in the oxid admin area, Extensions => Modules

7. Set you awin-id into the module settings
