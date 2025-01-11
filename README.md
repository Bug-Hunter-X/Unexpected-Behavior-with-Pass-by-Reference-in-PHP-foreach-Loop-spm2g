# PHP Pass-by-Reference Foreach Loop Bug

This repository demonstrates a subtle bug related to pass-by-reference in PHP's foreach loops when dealing with objects.  The `incrementArray` function intends to increment the value of each element in an array. While it works correctly with simple integer arrays, it exhibits unexpected behavior when used with objects.

The core issue lies in how PHP handles references within the foreach loop's scope.  When using a pass-by-reference on an object in the foreach loop, you are creating a reference to the object, not a reference to the property.  This means that the increment operation modifies the referenced object itself, and not the property of the referenced object. This leads to an incorrect output when using objects instead of integers.

The solution demonstrates a way to correct this behavior.