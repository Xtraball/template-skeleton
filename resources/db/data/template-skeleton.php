<?php

// Icons
use Siberian\Feature;
use Siberian\Template;

// Custom icons
$icons = [
    'skeleton1' => 'app/local/modules/TemplateSkeleton/resources/media/library/skeleton1.png',
    'skeleton2' => 'app/local/modules/TemplateSkeleton/resources/media/library/skeleton2.png',
    'skeleton3' => 'app/local/modules/TemplateSkeleton/resources/media/library/skeleton3.png',
    'skeleton4' => 'app/local/modules/TemplateSkeleton/resources/media/library/skeleton4.png',
    'skeleton5' => 'app/local/modules/TemplateSkeleton/resources/media/library/skeleton5.png',
    'skeleton6' => 'app/local/modules/TemplateSkeleton/resources/media/library/skeleton6.png',
    'skeleton7' => 'app/local/modules/TemplateSkeleton/resources/media/library/skeleton7.png',
    'skeleton8' => 'app/local/modules/TemplateSkeleton/resources/media/library/skeleton8.png',
];

// We insert icons one by one, so we can get the icon_id for each, and use it in our features!
// We fill the array $libraryKeys with our "keys" so we can identify our icons later, to assign them to our features!
$libraryKeys = [];
foreach ($icons as $key => $icon) {
    $result = Feature::installIcons('TemplateSkeleton', [$icon], false);
    $libraryKeys[$key] = $result;
}

// No changes here
$ionicColors = [
    'header' => [
        'color' => '#ffffff',
        'background_color' => '#5b5b5b'
    ],
    'background' => [
        'background_color' => '#e2e2e2'
    ],
    'homepage' => [
        'color' => '#5b5b5b',
        'background_color' => '#ffffff',
        'background_opacity' => '0',
        'border_color' => '#ffffff',
        'border_opacity' => '0',
        'image_color' => '#5b5b5b'
    ],
    'list_item_divider' => [
        'color' => '#ffffff',
        'background_color' => '#5b5b5b'
    ],
    'list_item' => [
        'color' => '#5b5b5b',
        'background_color' => '#ffffff',
        'border_color' => '#5b5b5b'
    ],
    'card_item_divider' => [
        'color' => '#ffffff',
        'background_color' => '#5b5b5b'
    ],
    'card_item' => [
        'color' => '#5b5b5b',
        'background_color' => '#ffffff'
    ],
    'buttons' => [
        'color' => '#ffffff',
        'background_color' => '#5b5b5b',
        'border_color' => '#ffffff'
    ],
    'checkbox_on' => [
        'color' => '#5b5b5b',
        'background_color' => '#c1c1c1'
    ],
    'checkbox_off' => [
        'background_color' => '#c1c1c1'
    ],
    'checkbox_general' => [
        'color' => '#5b5b5b',
        'background_color' => '#c1c1c1'
    ],
    'radio' => [
        'color' => '#5b5b5b',
        'background_color' => '#c1c1c1'
    ],
    'toggle_on' => [
        'background_color' => '#c1c1c1'
    ],
    'toggle_general' => [
        'color' => '#5b5b5b',
        'background_color' => '#c1c1c1'
    ],
    'toggle_off' => [
        'background_color' => '#c1c1c1',
        'border_color' => '#808080'
    ],
    'toggle_handle_on' => [
        'background_color' => '#c1c1c1'
    ],
    'toggle_handle_off' => [
        'background_color' => '#5b5b5b'
    ],
    'tooltip' => [
        'color' => '#ffffff',
        'background_color' => '#5b5b5b'
    ],
    'spinner_ios_text' => [
        'background_color' => '#5b5b5b'
    ],
    'spinner_android_text' => [
        'background_color' => '#5b5b5b'
    ]
];

// No more keys, we will use "code" so we can have the same feature, many times
$features = [
    [
        'code' => 'custom_page',
        'name' => 'About Us',
        'icon_id' => $libraryKeys['skeleton1']['icon_id']
    ],
    [
        'code' => 'catalog',
        'name' => 'Menu',
        'icon_id' => $libraryKeys['skeleton2']['icon_id']
    ],
    [
        'code' => 'commerce',
        'name' => 'Shop',
        'icon_id' => $libraryKeys['skeleton3']['icon_id']
    ],
    [
        'code' => 'fanwall2',
        'name' => 'Social wall',
        'icon_id' => $libraryKeys['skeleton4']['icon_id']
    ],
    [
        'code' => 'form_v2',
        'name' => 'Form',
        'icon_id' => $libraryKeys['skeleton5']['icon_id']
    ],
    [
        'code' => 'folder_v2',
        'name' => 'Folder #1',
        'icon_id' => $libraryKeys['skeleton6']['icon_id']
    ],
    [
        'code' => 'folder_v2',
        'name' => 'Folder #2',
        'icon_id' => $libraryKeys['skeleton7']['icon_id']
    ],
    [
        'code' => 'tabbar_account',
        'name' => 'My account',
        'icon_id' => $libraryKeys['skeleton8']['icon_id']
    ]
];

Template::installOrUpdate(
    'TemplateSkeleton',
    'Skeleton',
    'skeleton',
    'layout_3',
    ['Design'],
    $ionicColors,
    $features
);

