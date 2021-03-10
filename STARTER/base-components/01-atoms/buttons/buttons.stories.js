import React from 'react';

import ReactButtonComponent from './ReactButton/Button.component';

import Button from './Button/Button.twig';

import ButtonData from './Button/Button.yml';
import ButtonAltData from './Button/Button--alt.yml';

/**
 * Storybook Definition.
 */
export default {
  component: Button,
  title: 'Atoms/Button',
};

export const ReactButton = () => (
  <ReactButtonComponent>React Button</ReactButtonComponent>
);

export const RegularButton = () => (
  <div dangerouslySetInnerHTML={{ __html: Button(ButtonData) }} />
);
export const AlternativeButton = () => (
  <div dangerouslySetInnerHTML={{ __html: Button(ButtonAltData) }} />
);
