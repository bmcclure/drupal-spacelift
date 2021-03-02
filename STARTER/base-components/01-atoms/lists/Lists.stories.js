import React from 'react';

import Dl from './Dl.twig';
import Ul from './Ul.twig';
import Ol from './Ol.twig';

import DlData from './Dl.yml';
import UlData from './Ul.yml';
import OlData from './Ol.yml';

/**
 * Storybook Definition.
 */
export default { title: 'Atoms/Lists' };

export const definitionList = () => (
  <div dangerouslySetInnerHTML={{ __html: Dl(DlData) }} />
);
export const unorderedList = () => (
  <div dangerouslySetInnerHTML={{ __html: Ul(UlData) }} />
);
export const orderedList = () => (
  <div dangerouslySetInnerHTML={{ __html: Ol(OlData) }} />
);
