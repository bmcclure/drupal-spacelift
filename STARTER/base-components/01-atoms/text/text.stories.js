import React from 'react';

import Heading from './Heading/Heading.twig';
import Blockquote from './Blockquote.twig';
import Pre from './Pre-demo.twig';
import Paragraph from './InlineElements-demo.twig';

import BlockquoteData from './Blockquote.yml';
import HeadingData from './Heading/Heading.yml';

/**
 * Storybook Definition.
 */
export default { title: 'Atoms/Text' };

// Loop over items in headingData to show each one in the example below.
const headingItems = HeadingData.map((d) => Heading(d)).join('');

export const headings = () => (
  <div dangerouslySetInnerHTML={{ __html: headingItems }} />
);
export const blockquote = () => (
  <div dangerouslySetInnerHTML={{ __html: Blockquote(BlockquoteData) }} />
);
export const preformattedText = () => (
  <div dangerouslySetInnerHTML={{ __html: Pre({}) }} />
);
export const miscellaneous = () => (
  <div dangerouslySetInnerHTML={{ __html: Paragraph({}) }} />
);
