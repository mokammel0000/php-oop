<?php

// unserialize() function also checks for the existence of __wakeup() method of the unserialized object.

// I think it is the same as __unserialize().

// If an object has both __unserialize() and __wakup() methods,
// the unserialize() will call __unserialize() method only and ignore the __wakup() method.
