<?hh // strict
/*
 *  Copyright (c) 2017-present, Facebook, Inc.
 *  All rights reserved.
 *
 *  This source code is licensed under the MIT license found in the
 *  LICENSE file in the root directory of this source tree.
 *
 */

namespace Facebook\HHAST\__Private;


// A wrapper around the built-in exec with a nicer signature.
// * returns a result rather than filling an out-parameter
// * throws on error
function execute(string ...$args): vec<string> {
  return \HH\Asio\join(execute_async(...$args));
}
