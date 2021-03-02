import React from 'react';

import Button from './Button.twig';

import ButtonData from './Button.yml';

import ButtonDataAlt from './Button--alt.yml';

/**
 * Add storybook definition for lines
 */
export default {title: 'Atoms/Button'};

export const button = () => (
  <div dangerouslySetInnerHTML={{__html: Button(ButtonData)}}/>
);

export const buttonAlt = () => (
  <div dangerouslySetInnerHTML={{__html: Button(ButtonDataAlt)}}/>
);
