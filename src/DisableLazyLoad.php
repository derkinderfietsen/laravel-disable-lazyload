<?php

namespace Derkinderfietsen\DisableLazyLoad;

trait DisableLazyLoad
{
	protected function getRelationshipFromMethod($method)
	{
		throw new \BadMethodCallException('Relation lazy load has been disabled for performance reasons');
	}
}
