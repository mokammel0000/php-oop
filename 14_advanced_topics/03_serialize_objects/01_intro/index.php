<?php


/**
 * Object Serialization:
 * converting an object into a format that can be easily stored, transmitted, or reconstructed later.
 * useful when you want to save the state of an object or transfer it between different systems or processes.
 *
 * serialize an object in PHP = gets converted into a string representation
 * serialized object can be saved to a file, sent over a network, or stored in a database.
 * later, you can unserialize this string to reconstruct the original object with its state intact.
 *
 * Serialization is commonly used for tasks such as:
 * 1-Session Management, 2-Caching, 3- Data Transfer, 4-Storing State.
 *
 * not all objects can be serialized;
 * Objects that contain resources like file handles or database connections cannot be serialized.
 *
 *
 * serialize() function creates a storable representation of an object,
 * while the unserialize() function creates an object from the storable value.
 *
 *
 * serialize() function returns a string that contains a byte-stream representation of the object.
 * then you can store this string in storage such as a file or a database.

 * serialize() function only serializes the properties of the object, not the method.
 */
