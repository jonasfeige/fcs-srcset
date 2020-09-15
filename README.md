# fcs-srcset
Custom srcset function for the Kirby Focus Plugin

`$image->fcsSrcset()`

`$image->fcsSrcset(['width' => 500, 'height' => 400]);`

```
$image->fcsSrcset(['breakpoints' => 
[
'width' => 1024,
'ratio' => 1
],
[
'width' => 1440,
'ratio' => 1.2
]
]);
```
