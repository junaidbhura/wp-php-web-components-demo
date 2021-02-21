/**
 * WordPress dependencies.
 */
import wp from 'wp';
const { __ } = wp.i18n;
const {
	RichText,
	InnerBlocks,
	useBlockProps,
} = wp.blockEditor;

/**
 * Styles.
 */
import '../../components/hello-world/style.css';
import './editor.css';

/**
 * Block data.
 */
export const name = 'jb/hello-world';

export const settings = {
	apiVersion: 2,
	title: __( 'Hello World' ),
	description: __( 'Hello World block.' ),
	icon: 'smiley',
	category: 'layout',
	keywords: [
		__( 'hello' ),
		__( 'world' ),
	],
	attributes: {
		title: {
			type: 'string',
		},
		subtitle: {
			type: 'string',
		},
	},
	supports: {
		alignWide: false,
		className: false,
		html: false,
		color: false,
		customClassName: false,
	},
	edit( { attributes, setAttributes } ) {
		return (
			<div {
				/* eslint-disable-next-line react-hooks/rules-of-hooks */
				...useBlockProps( {
					className: 'hello-world',
				} )
			}>
				<RichText
					tagName="h1"
					placeholder={ __( 'Write title…' ) }
					value={ attributes.title }
					onChange={ ( title ) => setAttributes( { title } ) }
					keepPlaceholderOnFocus={ true }
				/>
				<RichText
					tagName="h2"
					placeholder={ __( 'Write subtitle…' ) }
					value={ attributes.subtitle }
					onChange={ ( subtitle ) => setAttributes( { subtitle } ) }
					keepPlaceholderOnFocus={ true }
				/>
			</div>
		);
	},
	save() {
		return null;
	},
};
