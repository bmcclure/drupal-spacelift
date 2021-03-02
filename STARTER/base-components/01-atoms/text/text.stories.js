import React from 'react';

import Heading from './Heading/_Heading.twig';
import Blockquote from './Blockquote.twig';
import Pre from './Pre.twig';
import Paragraph from './InlineElements.twig';

import BlockquoteData from './Blockquote.yml';
import HeadingData from './Heading/Heading.yml';

/**
 * Storybook Definition.
 */
export default { title: 'Atoms/Text' };

// Loop over items in headingData to show each one in the example below.
const headings = HeadingData.map((d) => Heading(d)).join('');

export const headingsExamples = () => (
  <div dangerouslySetInnerHTML={{ __html: headings }} />
);
export const blockquoteExample = () => (
  <div dangerouslySetInnerHTML={{ __html: Blockquote(BlockquoteData) }} />
);
export const preformatted = () => (
  <div dangerouslySetInnerHTML={{ __html: Pre({}) }} />
);
export const random = () => (
  <div dangerouslySetInnerHTML={{ __html: Paragraph({}) }} />
);
