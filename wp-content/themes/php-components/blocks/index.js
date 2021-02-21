/**
 * WordPress dependencies.
 */
import wp from 'wp';
const { registerBlockType } = wp.blocks;

/**
 * Blocks.
 */
import * as helloWorld from './hello-world';

const blocks = [
	helloWorld,
];

blocks.forEach( ( { name, settings } ) => registerBlockType( name, settings ) );
