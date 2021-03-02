import React from 'react';

import Checkboxes from './Checkboxes/Checkboxes.twig';
import Radios from './Radios/Radios.twig';
import Select from './Select/Select.twig';
import Textfields from './Textfields/Textfields.twig';

import CheckboxData from './Checkboxes/Checkboxes.yml';
import RadioData from './Radios/Radios.yml';
import SelectOptionsData from './Select/Select.yml';

/**
 * Storybook Definition.
 */
export default { title: 'Atoms/Forms' };

export const checkboxes = () => (
  <div dangerouslySetInnerHTML={{ __html: Checkboxes(CheckboxData) }} />
);
export const radios = () => (
  <div dangerouslySetInnerHTML={{ __html: Radios(RadioData) }} />
);
export const select = () => (
  <div dangerouslySetInnerHTML={{ __html: Select(SelectOptionsData) }} />
);
export const textfieldExamples = () => (
  <div dangerouslySetInnerHTML={{ __html: Textfields({}) }} />
);
