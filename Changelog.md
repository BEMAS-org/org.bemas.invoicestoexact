# Changelog

## 1.0.1

- Label translation was generalized in invoice-note generation: the helper now translates multiple predefined labels by language (including both the training-date label and the participant label), with Dutch as fallback.

## 1.0.0

- Dry-run mode was introduced and hardened for safer testing: activation via variable, no Exact connection during dry runs, clearer output, and minor bug fixes.
- Training dates were added to invoice notes, with improved formatting/fallback behavior and language-aware labels based on contact preferred language (Dutch/English/French, defaulting to Dutch when unset or unsupported).
- Event contribution line-item processing was reworked to prevent overlapping event and catering lines.
- Dev branch metadata was aligned for ongoing development.

